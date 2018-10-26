<?php
return [
    ' unique '                =>  '：属性已存在'，
    ' accepted '              =>  '：属性是被接受的'，
    ' active_url '            =>  '：attribute必须是一个合法的URL '，
    ' after '                 =>  '：attribute必须是：date之后的一个日期'，
    ' alpha '                 =>  '：attribute必须全部由字母字符构成。'，
    ' alpha_dash '            =>  '：attribute必须全部由字母，数字，中划线或下划线字符构成'，
    ' alpha_num '             =>  '：属必须全部由字母和数字构成'，
    ' array '                 =>  '：attribute必须是个数组'，
    ' before '                =>  '：attribute必须是：date之前的一个日期'，
    ' between '               => [
        ' numeric '  =>  '：attribute必须在：min到：max之间'，
        ' file '     =>  '：attribute必须在：min到：max KB之间'，
        ' string '   =>  '：attribute必须在：min到：max个字符之间'，
        ' array '    =>  '：attribute必须在：min到：max项之间'，
    ]
    ' boolean '               =>  '：属性字符必须是true或false '，
    ' confirmed '             =>  '：属性二次确认不匹配'，
    ' date '                  =>  '：attribute必须是一个合法的日期'，
    ' date_format '           =>  '：属性与给定的格式：format不符合'，
    ' different '             =>  '：attribute必须不同于：other '，
    ' digits '                =>  '：attribute必须是：digits位'，
    ' digits_between '        =>  '：attribute必须在：min和：max位之间'，
    ' email '                 =>  '：attribute必须是一个合法的电子邮件地址。'，
    ' filled '                =>  '：属性的字段是必填的'，
    ' exists '                =>  '选定的：attribute是无效的'，
    ' image '                 =>  '：属性必须是一个图片（jpeg，png，bmp或者gif）'，
    ' in '                    =>  '选定的：属性是无效的'，
    ' integer '               =>  '：attribute必须是个整数'，
    ' ip '                    =>  '：attribute必须是一个合法的IP地址。'，
    ' max '                   => [
        ' numeric '  =>  '：attribute的最大长度为：max位'，
        ' file '     =>  '：attribute的最大为：max '，
        ' string '   =>  '：attribute的最大长度为：max字符'，
        ' array '    =>  '：attribute的最大个数为：max个'，
    ]
    ' mimes '                 =>  '：属性的文件类型必须是：values '，
    ' min '                   => [
        ' numeric '  =>  '：attribute的最小长度为：min位'，
        ' string '   =>  '：attribute的最小长度为：min字符'，
        ' file '     =>  '：属性大小至少为：min KB '，
        ' array '    =>  '：属性至少有：min项'，
    ]
    ' not_in '                =>  '选定的：属性是无效的'，
    ' numeric '               =>  '：attribute必须是数字'，
    ' regex '                 =>  '：属性格式是无效的'，
    ' required '              =>  '：属性字段必须填写'，
    ' required_if '           =>  '：属性字段是必须的当：其他是：value '，
    ' required_with '         =>  '：属性字段是必须的当：values是存在的'，
    ' required_with_all '     =>  '：属性字段是必须的当：values是存在的'，
    ' required_without '      =>  '：属性字段是必须的当：values是不存在的'，
    ' required_without_all '  =>  '：属性字段是必须的当没有一个：values是存在的'，
    ' same '                  =>  '：属性和：其他必须匹配'，
    ' size '                  => [
        ' numeric '  =>  '：attribute必须是：size的'，
        ' file '     =>  '：attribute必须是：size KB '，
        ' string '   =>  '：attribute必须是：size个字符'，
        ' array '    =>  '：attribute必须包括：size项'，
    ]
    ' url '                   =>  '：属性无效的格式'，
    ' timezone '              =>  '：属性必须个有效的时区'，
    / *
    | ------------------------------------------------- -------------------------
    | 自定义验证语言行
    | ------------------------------------------------- -------------------------
    |
    | 在这里，您可以使用指定属性的自定义验证消息
    | 约定“attribute.rule”来命名行。这使得它很快
    | 为给定的属性规则指定特定的自定义语言行。
    |
    * /
    ' custom '                => [
        ' attribute-name '  => [
            ' rule-name '  =>  ' custom-message '，
        ]
    ]
    / *
    | ------------------------------------------------- -------------------------
    | 自定义验证属性
    | ------------------------------------------------- -------------------------
    |
    | 以下语言行用于交换属性占位符
    | 更喜欢读者友好的东西，比如电子邮件地址
    | “电子邮件”。这简单地帮助我们使消息更清洁。
    |
    * /
    ' attributes '            => [
        ' username '  =>  '用户名'，
        '帐户'   =>  '账号'，
        ' captcha '   =>  '验证码'，
        ' mobile '    =>  '手机号'，
        ' password '  =>  '密码'，
        ' content '   =>  '内容'，
        ' identity '  =>  '手机号/用户名'，
    ]
];
