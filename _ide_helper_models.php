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
 * App\Activity
 *
 * @property int $id
 * @property string $title 活动标题
 * @property string $abstract 活动的简介
 * @property string $schedule 活动的时间表，进行php序列化储存
 * @property string $sign_up_url 报名的外部链接
 * @property string $poster_url 海报的外部链接
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereAbstract($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity wherePosterUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereSchedule($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereSignUpUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity whereTitle($value)
 */
	class Activity extends \Eloquent {}
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

