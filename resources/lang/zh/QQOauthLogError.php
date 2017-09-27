<?php
/**
 * qq授权的错误码对应的用于记录日志的错误信息
 */
return [
    '100000' => '缺少参数response_type或response_type非法',
    '100001' => '缺少参数client_id',
    '100002' => '缺少参数client_secret',
    '100003' => 'http head中缺少Authorization',
    '100004' => '缺少参数grant_type或grant_type非法',
    '100005' => '缺少参数code',
    '100006' => '缺少refresh token',
    '100007' => '缺少access token',
    '100008' => '该appid不存在',
    '100009' => 'client_secret（即appkey）非法',
    '100010' => '回调地址不合法',
    '100011' => 'APP不处于上线状态',
    '100012' => 'HTTP请求非post方式',
    '100013' => 'access token非法',
    '100014' => 'access token过期',
    '100015' => 'access token废除',
    '100016' => 'access token验证失败',
    '100017' => '获取appid失败',
    '100018' => '获取code值失败',
    '100019' => '用code换取access token值失败',
    '100020' => 'code被重复使用',
    '100021' => '获取access token值失败',
    '100022' => '获取refresh token值失败',
    '100023' => '获取app具有的权限列表失败',
    '100024' => '获取某OpenID对某appid的权限列表失败',
    '100025' => '获取全量api信息、全量分组信息',
    '100026' => '设置用户对某app授权api列表失败',
    '100027' => '设置用户对某app授权时间失败',
    '100028' => '缺少参数which',
    '100029' => '错误的http请求',
    '100030' => '用户没有对该api进行授权，或用户在腾讯侧删除了该api的权限。请用户重新走登录、授权流程，对该api进行授权',
    '100031' => '第三方应用没有对该api操作的权限',
    'STATE_NOT_MATCH' => 'state值不匹配，存在潜在的CSRF攻击'
];