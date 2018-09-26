/**
 * 
 */
	$(document).ready(function() {
		// $.formValidator.initConfig({onError:function(){alert("校验没有通过，具体错误请看错误提示")}});
		$.formValidator.initConfig({
			onError : function(msg) {
				alert(msg);
			}
		});
		$("#username").formValidator({
			onshow : "请输入用户名名称",
			onfocus : "请输入用户名名称",
		}).InputValidator({
			min : 1,
			onerror : "你输入的用户名不能为空"
		});
		$("#realname").formValidator({
			onshow : "请输入管理员真实姓名",
			onfocus : "请输入管理员真实姓名",
		}).InputValidator({
			min : 1,
			onerror : "你输入的管理员真实姓名不能为空"
		});
		
		$("#password").formValidator({
			onshow : "请输入密码",
			onfocus : "请输入密码",
		}).InputValidator({
			min : 6,
			onerror : "密码长度不少于六位"
		});
		$("#password2").formValidator({
				onshow:"请输入重复密码",
				onfocus:"两次密码必须一致哦",
				oncorrect:"密码一致"}).
			InputValidator({
				min:1,onerror:"重复密码不能为空,请确认"
			}).CompareValidator({
				desID:"password",
				operateor:"=",
				onerror:"2次密码不一致,请确认"
				});

		$("#email").formValidator({onshow:
			"请输入邮箱",onfocus:"邮箱至少6个字符,最多100个字符",
			oncorrect:"恭喜你,你输对了"}).
			InputValidator({min:6,max:100,onerror:"你输入的邮箱长度非法,请确认"}).
			RegexValidator({regexp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",
			onerror:"你输入的邮箱格式不正确"});
		
		$("#role").formValidator({onshow:"请选择管理员的角色",onfocus:"角色必须选择",oncorrect:"谢谢你的配合"}).InputValidator({min:1,onerror: "你是不是忘记选择角色了!"});
		$("#adminGroup").formValidator({onshow:"请选择管理员的角色",onfocus:"分组必须选择",oncorrect:"谢谢你的配合"}).InputValidator({min:1,onerror: "你是不是忘记选择分组了!"});

		
		// eidt
		
		$("#editPassword").formValidator({
			empty:true,
			onshow : "不修改密码请留空。",
			onfocus : "请输入密码",
		}).InputValidator({
			min : 6,
			onerror : "密码长度不少于六位"
		});
		$("#editPassword2").formValidator({
			empty:true,
				onshow:"不修改密码请留空。",
				onfocus:"两次密码必须一致哦",
				oncorrect:"密码一致"}).
			InputValidator({
				min:1,onerror:"重复密码不能为空,请确认"
			}).CompareValidator({
				desID:"editPassword",
				operateor:"=",
				onerror:"2次密码不一致,请确认"
				});

	});