function SetDevice() {
    var _this = this;

    this.dpr = 3;
    this.bodyWidth = 360;

    this.getDp = function() {
        _this.dpr = window.devicePixelRatio;
        _this.bodyWidth = document.body.clientWidth;

        // console.log(_this.dpr + ',' + _this.bodyWidth);

        return [_this.dpr, _this.bodyWidth];
    };
    this.setRem = function() {
        _this.getDp();

        var RootSize = _this.bodyWidth / 360 * 100;

        document.getElementsByTagName('html')[0].style.fontSize = RootSize + 'px';

        _this.reset();
    };
    this.reset = function() {
        window.onresize = function() {
            _this.getDp();
        }
    }

    return this;
}

function AddMember() {
    var _this = this;
    var addOne = document.getElementById('add_member');
    var reduceOne = document.getElementById('reduce_member');
    var input = document.getElementsByTagName('input');
    var memberInfo = document.getElementsByClassName('add-member');
    this.time = 1;

    this.add = function() {
        var mem = document.getElementById('member_' + _this.time);
        mem.style.display = 'block';
        _this.time += 1;
        _this.hide();
    };

    this.reduce = function() {
        _this.time -= 1;
        var mem = document.getElementById('member_' + _this.time);
        mem.style.display = 'none';
        _this.hide();
    }

    this.hide = function() {
        switch (_this.time) {
            case 1:
                {
                    reduceOne.style.display = 'none';
                    break;
                };
            case 2:
                {
                    addOne.style.display = 'block';
                    reduceOne.style.display = 'block';
                    break;
                }
            case 3:
                {
                    addOne.style.display = 'none';
                    break;
                };
            default:
                {
                    break;
                }
        }
        // console.log(_this.time);
    }
    return this;
}

function SetClass() {
    this.hasClass = function(el, cN) {

        return el.className.match(cN);
    };
    this.addClass = function(el, cN) {
        if (el.className) {
            el.className += (' ' + cN);
        } else {
            el.className = cN;
        }

        return this;
    };
    this.removeClass = function(el, cN) {

        if (this.hasClass(el, (' ' + cN))) {
            el.className = el.className.replace((' ' + cN), '');
        } else if (this.hasClass(el, cN)) {
            el.className = el.className.replace(cN, '');
        } else {
//            return console.error('.' + cN + ' is not in ' + el);
        }

        return this;
    };
}

function CheckInfo(AddMember) {
    // console.log(AddMember);
    var _this = this;
    var addOne = document.getElementById('add_member');
    var reduceOne = document.getElementById('reduce_member');
    var container = document.getElementsByClassName('container');
    var input = document.getElementsByTagName("input");
    var textarea = document.getElementsByTagName('textarea');
    var setClass = new SetClass();

    this.sub = [false, false, false, false, true, true, true, true, true, true, false];

    this.init = function() {
        this.checkTeam();
    };
    this.submitable = function() {
        this.check();
        return _this.sub[0] && _this.sub[1] && _this.sub[2] && _this.sub[3] && _this.sub[4] && _this.sub[5] && _this.sub[6] && _this.sub[7] && _this.sub[8] && _this.sub[9] && _this.sub[10];
    };
    this.checkTeam = function() {
        this.checkShow(input, function() { return _this.checkTeamName(0); }, 0);
        this.checkShow(textarea, function() { return _this.checkEmpty(textarea, 0); }, 0);
        this.checkMember(AddMember.time);
        addOne.onclick = function() {
            AddMember.add();
            _this.addMemberInit(AddMember.time);
            _this.checkMember(AddMember.time);
        }
        reduceOne.onclick = function() {
            _this.clearMemberInfo(AddMember.time);
            AddMember.reduce();
        }
    };

    this.checkMember = function(i) {
        this.checkShow(input, function() { return _this.checkName(i); }, (i * 3 - 2));
        this.checkShow(input, function() { return _this.checkTel(i); }, i * 3 - 1);
        this.checkShow(input, function() { return _this.checkQQ(i); }, (i * 3));
    };
    this.addMemberInit = function(num) {
        this.sub[num * 3 - 2] = false;
        this.sub[num * 3 - 1] = false;
        this.sub[num * 3] = false;
    }
    this.clearMemberInfo = function(num) {
        this.sub[num * 3 - 2] = true;
        this.sub[num * 3 - 1] = true;
        this.sub[num * 3] = true;
        setClass.removeClass(input[num * 3 - 2], 'err');
        setClass.removeClass(input[num * 3 - 1], 'err');
        setClass.removeClass(input[num * 3], 'err');
        input[num * 3 - 2].value = '';
        input[num * 3 - 1].value = '';
        input[num * 3].value = '';
    };
    this.checkEmpty = function(obj, num) {
        return obj[num].value;
    };
    this.checkShow = function(obj, isRight, num) {
        obj[num].onblur = function() {
            num = (obj == input) ? num : 10;
            this.onfocus = function() {
                setClass.removeClass(this, 'err');
            }
            if (!isRight()) {
                setClass.addClass(this, 'err');

                _this.sub[num] = false;
                return false;
            }
            _this.sub[num] = true;
        }
        return true;
    };
    this.checkTeamName = function(num) {
        return input[num].value.length <= 20 && input[num].value.length > 0;
    }
    this.checkName = function(num) {
        //中日韩
        var reg = /^[\u4E00-\u9FA5]{1,20}$/;
        num = (num == 0) ? 0 : (num * 3 - 2);
        return reg.test(input[num].value);
    };
    this.checkTel = function(num) {
        var reg = /^1[34578]\d{9}$/;
        return reg.test(input[num * 3 - 1].value);
    };
    this.checkQQ = function(num) {
        var reg = /^\d{5,12}$/;
        return reg.test(input[num * 3].value);
    };
    this.message = function(word, time) {
        return notice = {
            init: function() {
                var _this = this;
                this.create(word);
                if(time) {
                		setTimeout(function() {
                        _this.remove();
                    }, time);
                }
                return this;
            },
            create: function() {
                var textNode = document.createElement('div');
                var text = document.createTextNode(word);
                textNode.appendChild(text);
                textNode.setAttribute('class', 'message');
                container[0].appendChild(textNode);
                return this;
            },
            remove: function() {
                container[0].removeChild(document.getElementsByClassName('message')[0]);
                return this;
            }
        };
    };
    this.check = function() {
        console.log(this.sub);
        console.log(_this.sub[0] && _this.sub[1] && _this.sub[2] && _this.sub[3] && _this.sub[4] && _this.sub[5] && _this.sub[6] && _this.sub[7] && _this.sub[8] && _this.sub[9] && _this.sub[10]);
    };
}

function Submit(MemberAdd, CheckResult) {
    var _this = this;
    var errorFlag = true; // 如果是false表示还有错误信息存在，ajax请求会被阻止
    var submitButton = document.getElementsByTagName('button')[0];
    var messageBag;

    this.init = function() {
        _this.ajaxSend();
        _this.validator();
    }

    this.getTotalMessage = function() {
        var memberNum = MemberAdd.time - 1;
        var input = document.getElementsByTagName('input');
        messageBag = new FormData();
        messageBag.append('teamName', input[0].value);
        messageBag.append('slogen', document.getElementsByTagName('textarea')[0].value);
        messageBag.append('leader[name]', input[1].value);
        messageBag.append('leader[phone]', input[2].value);
        messageBag.append('leader[qq]', input[3].value);
        switch (memberNum) {
            case 2:
                messageBag.append('member[1][name]', input[7].value);
                messageBag.append('member[1][phone]', input[8].value);
                messageBag.append('member[1][qq]', input[9].value);
            case 1:
                messageBag.append('member[0][name]', input[4].value);
                messageBag.append('member[0][phone]', input[5].value);
                messageBag.append('member[0][qq]', input[6].value);
                break;
            case 0:
                messageBag.append('member', []);
        }
    }

    this.ajaxSend = function() {
        submitButton.onclick = function() {
            errorFlag = CheckResult.submitable();
            if (!errorFlag) {
                // 这里表示出错了，请用户改一下信息
                CheckResult.message('请检查填写是否有误！', 3000).init();

                return false;
            }
            
            var handing = CheckResult.message('提交中...', 0).init();
            
            _this.getTotalMessage();
            var XHR = new XMLHttpRequest();
            XHR.open('post', '../competition/sign-up', 'true');
            XHR.setRequestHeader('x-requested-with', 'XMLHttpRequest');
            XHR.onreadystatechange = function() {
                if (XHR.readyState == 4) {
                		//去掉提交中
                		handing.remove();
                    if (XHR.status == 200) {
                        // 报名成功
                        CheckResult.message('报·名·成·功！', 3000).init();
                    } else if (XHR.status == 422 || XHR.status == 500) {
                        //报名失败
                        CheckResult.message('报·名·失·败！', 3000).init();
                    }
                }
            }
            XHR.send(messageBag);
        }
    }

    this.validator = function() {
        // 验证错误信息 
    }
    return this;
}

window.onload = function() {
    var DeviceSetting = new SetDevice();
    DeviceSetting.setRem();

    var MemberAdd = new AddMember();

    var InfoCheck = new CheckInfo(MemberAdd);
    InfoCheck.init();

    var Register = new Submit(MemberAdd, InfoCheck);
    Register.init();
}
