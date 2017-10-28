<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\CarouselFigure
 *
 * @property int $id
 * @property string $imgpath
 * @property string $imgmes 图片信息
 * @property string $imgtype 图片类型
 * @property string $acturl 跳转链接
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereActurl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereImgmes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereImgpath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereImgtype($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CarouselFigure whereUpdatedAt($value)
 */
	class CarouselFigure extends \Eloquent {}
}

namespace App{
/**
 * App\CompetitionTeam
 *
 * @property int $id
 * @property string $team_name 队伍名
 * @property string $slogen 口号
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CompetitionMember[] $competitionMember
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionTeam whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionTeam whereSlogen($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionTeam whereTeamName($value)
 */
	class CompetitionTeam extends \Eloquent {}
}

namespace App{
/**
 * App\ComReport
 *
 * @property int $id
 * @property int $user_id user表外键
 * @property int $article_id report表外键
 * @property string $content 评论内容
 * @property string $thumb_up
 * @property \Carbon\Carbon $created_at 创建时间戳
 * @property-read \App\Report $report
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\ComReport whereArticleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComReport whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComReport whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComReport whereThumbUp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComReport whereUserId($value)
 */
	class ComReport extends \Eloquent {}
}

namespace App{
/**
 * App\ComRepairTrick
 *
 * @property int $id
 * @property int $user_id
 * @property int $article_id
 * @property string $content
 * @property string $thumb_up
 * @property \Carbon\Carbon $created_at
 * @property-read \App\RepairTrick $repairTrick
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\ComRepairTrick whereArticleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComRepairTrick whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComRepairTrick whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComRepairTrick whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComRepairTrick whereThumbUp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ComRepairTrick whereUserId($value)
 */
	class ComRepairTrick extends \Eloquent {}
}

namespace App{
/**
 * App\Director
 *
 * @property int $id
 * @property string $position 职位
 * @property string $name 姓名
 * @property string $wish 协会寄语
 * @property string $imgpath 图片位置
 * @property string $created_at
 * @property string $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Director whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Director whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Director whereImgpath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Director whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Director wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Director whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Director whereWish($value)
 */
	class Director extends \Eloquent {}
}

namespace App{
/**
 * App\FeedbackResponse
 *
 * @property int $id
 * @property int $user_id 用户表外键
 * @property int $question_id 提问表外键
 * @property int $admin_id 回应的管理员
 * @property string $content 回答内容
 * @property \Carbon\Carbon $created_at 创建时间戳
 * @property-read \App\Admin $admin
 * @property-read \App\Feedback $feedback
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\FeedbackResponse whereAdminId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FeedbackResponse whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FeedbackResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FeedbackResponse whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FeedbackResponse whereQuestionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\FeedbackResponse whereUserId($value)
 */
	class FeedbackResponse extends \Eloquent {}
}

namespace App{
/**
 * App\Department
 *
 * @property int $id
 * @property string $dpt 部门名称
 * @property string $intro 部门介绍
 * @property string $imgpathf 图片1
 * @property string $imgpaths 图片2
 * @property string $imgpatht 图片3
 * @property string $created_at
 * @property string $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereDpt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereImgpathf($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereImgpaths($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereImgpatht($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereIntro($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App{
/**
 * App\RepairTrick
 *
 * @property int $id
 * @property string $title 标题
 * @property string $abstract 简介
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ComRepairTrick[] $comRepairTrick
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTrick whereAbstract($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTrick whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTrick whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTrick whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RepairTrick whereUpdatedAt($value)
 */
	class RepairTrick extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $username 用户名，暂时不用
 * @property string $password 用户密码，暂时不用
 * @property string $nickname 用户自定义昵称，暂时不用
 * @property \Carbon\Carbon $regis_time 用户注册时间戳
 * @property \Carbon\Carbon $login_time 用户最后一次登陆时间戳
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ComRepairTrick[] $comRepairTrick
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ComReport[] $comReport
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Feedback[] $feedback
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FeedbackResponse[] $feedbackResponse
 * @property-read \App\QQUser $qqUser
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLoginTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRegisTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Report
 *
 * @property int $id
 * @property string $title 标题
 * @property string $abstract 简介
 * @property string $imgpath
 * @property int $status
 * @property \Carbon\Carbon $created_at 创建时间戳
 * @property \Carbon\Carbon $updated_at 更新时间戳
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ComReport[] $comReport
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereAbstract($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereImgpath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Report whereUpdatedAt($value)
 */
	class Report extends \Eloquent {}
}

namespace App{
/**
 * App\Work
 *
 * @property int $id
 * @property string $title 标题
 * @property string $abstract 简介
 * @property string $imgpath
 * @property \Carbon\Carbon $created_at 创建时间戳
 * @property \Carbon\Carbon $updated_at 更新时间戳
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereAbstract($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereImgpath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Work whereUpdatedAt($value)
 */
	class Work extends \Eloquent {}
}

namespace App{
/**
 * App\Association
 *
 * @property int $id
 * @property string $intro 协会简介
 * @property string $introimgpath 协会简介图片
 * @property string $activity 品牌活动
 * @property string $actimgpathf 活动图片1
 * @property string $actimgpaths 活动图片2
 * @property int $update_time 更改记录的时间戳
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereActimgpathf($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereActimgpaths($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereActivity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereIntro($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereIntroimgpath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Association whereUpdateTime($value)
 */
	class Association extends \Eloquent {}
}

namespace App{
/**
 * App\QQUser
 *
 * @property int $id
 * @property int $user_id user表外键
 * @property string $open_id 用户的openid
 * @property string $access_token 用户的口令
 * @property string $refresh_token 刷新用口令
 * @property string $user_info php序列化存储用户的头像地址和qq昵称
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\QQUser whereAccessToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QQUser whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QQUser whereOpenId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QQUser whereRefreshToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QQUser whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QQUser whereUserInfo($value)
 */
	class QQUser extends \Eloquent {}
}

namespace App{
/**
 * App\Activity
 *
 * @property int $id
 * @property string $title 活动标题
 * @property string $abstract 活动的简介
 * @property string $schedule 活动的时间表，进行php序列化储存
 * @property string $way
 * @property string $poster
 * @property int $status
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereAbstract($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity wherePoster($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereSchedule($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereWay($value)
 */
	class Activity extends \Eloquent {}
}

namespace App{
/**
 * App\TechGroup
 *
 * @property int $id
 * @property string $group 小组名称
 * @property string $intro 小组介绍
 * @property string $imgpathf 图片1
 * @property string $imgpaths 图片2
 * @property string $imgpatht 图片3
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereImgpathf($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereImgpaths($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereImgpatht($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereIntro($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TechGroup whereUpdatedAt($value)
 */
	class TechGroup extends \Eloquent {}
}

namespace App{
/**
 * App\Dynamic
 *
 * @property int $id
 * @property string $imgpath
 * @property string $title 标题
 * @property string $summary 摘要
 * @property string $acturl 跳转链接
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereActurl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereImgpath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereSummary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Dynamic whereUpdatedAt($value)
 */
	class Dynamic extends \Eloquent {}
}

namespace App{
/**
 * App\CompetitionMember
 *
 * @property int $id
 * @property int $team_id team表外健
 * @property bool $is_leader 1是队长，0不是
 * @property string $name 队伍名
 * @property string $phone 电话号码
 * @property string $qq qq号
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionMember whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionMember whereIsLeader($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionMember whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionMember wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionMember whereQq($value)
 * @method static \Illuminate\Database\Query\Builder|\App\CompetitionMember whereTeamId($value)
 */
	class CompetitionMember extends \Eloquent {}
}

namespace App{
/**
 * App\Admin
 *
 * @property int $id
 * @property string $username 管理员用户名
 * @property string $password 管理员加密后的密码
 * @property string $nickname 管理员昵称
 * @property bool $authority
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\FeedbackResponse[] $feedbackResponse
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereAuthority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Admin whereUsername($value)
 */
	class Admin extends \Eloquent {}
}

namespace App{
/**
 * App\Feedback
 *
 * @property int $id
 * @property int $user_id user表外键
 * @property string $content 提问内容
 * @property \Carbon\Carbon $created_at 提交时间戳
 * @property-read \App\FeedbackResponse $feedbackResponse
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Feedback whereUserId($value)
 */
	class Feedback extends \Eloquent {}
}

