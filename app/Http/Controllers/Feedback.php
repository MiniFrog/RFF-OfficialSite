<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\AuthOperationWithRequest;
use App\Feedback as FeedbackModel;

class Feedback extends Controller
{
    use AuthOperationWithRequest;

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function scan()
    {
        $index = $this->request->input('index');
        $offset = ($index - 1) * 30;
        $feedbacks = FeedbackModel::with('FeedbackResponse.admin')->where('user_id', '=', $this->getUserId())
            ->orderBy('id', 'desc')
            ->offset($offset)
            ->limit(30)
            ->get(); 
        return response()->json($this->makeScanMessageBag($feedbacks));
    }

    public function handIn()
    {
        $content = $this->request->input('content');
        $content = htmlspecialchars($content, ENT_QUOTES | ENT_HTML5);
        FeedbackModel::create(array(
            'content' => $content,
            'created_at' => time(),
            'user_id' => $this->getUserId()
        ));
        return response()->json(array(
            'state' => true
        ));
    }

    protected function makeScanMessageBag($feedbacks)
    {
        if (! count($feedbacks)) {
            return array(
                'state' => false
            );
        }
        $message_bag = array(
            'state'
        );
        foreach ($feedbacks as $key => $feedback) {
            $message_bag['feedback'][$key]["feedbackCreateTime"] = $feedback->created_at->timestamp;
            $message_bag['feedback'][$key]["feedbackContent"] = $feedback->content;
            if ($feedback->FeedbackResponse != NULL) {
                $message_bag['feedback'][$key]["respondCreateTime"] = $feedback->FeedbackResponse->created_at->timestamp;
                $message_bag['feedback'][$key]["respondContent"] = $feedback->FeedbackResponse->content;
                $message_bag['feedback'][$key]["responseAdmin"] = $feedback->FeedbackResponse->admin->nickname;
            } else {
                $message_bag['feedback'][$key]["respondCreateTime"] = '';
                $message_bag['feedback'][$key]["respondContent"] = '';
                $message_bag['feedback'][$key]["responseAdmin"] = '';
            }
        }
        return $message_bag;
    }
}
