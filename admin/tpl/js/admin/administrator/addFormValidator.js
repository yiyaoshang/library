/**
 * 
 */
	$(document).ready(function() {
		// $.formValidator.initConfig({onError:function(){alert("У��û��ͨ������������뿴������ʾ")}});
		$.formValidator.initConfig({
			onError : function(msg) {
				alert(msg);
			}
		});
		$("#username").formValidator({
			onshow : "�������û�������",
			onfocus : "�������û�������",
		}).InputValidator({
			min : 1,
			onerror : "��������û�������Ϊ��"
		});
		$("#realname").formValidator({
			onshow : "���������Ա��ʵ����",
			onfocus : "���������Ա��ʵ����",
		}).InputValidator({
			min : 1,
			onerror : "������Ĺ���Ա��ʵ��������Ϊ��"
		});
		
		$("#password").formValidator({
			onshow : "����������",
			onfocus : "����������",
		}).InputValidator({
			min : 6,
			onerror : "���볤�Ȳ�������λ"
		});
		$("#password2").formValidator({
				onshow:"�������ظ�����",
				onfocus:"�����������һ��Ŷ",
				oncorrect:"����һ��"}).
			InputValidator({
				min:1,onerror:"�ظ����벻��Ϊ��,��ȷ��"
			}).CompareValidator({
				desID:"password",
				operateor:"=",
				onerror:"2�����벻һ��,��ȷ��"
				});

		$("#email").formValidator({onshow:
			"����������",onfocus:"��������6���ַ�,���100���ַ�",
			oncorrect:"��ϲ��,�������"}).
			InputValidator({min:6,max:100,onerror:"����������䳤�ȷǷ�,��ȷ��"}).
			RegexValidator({regexp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",
			onerror:"������������ʽ����ȷ"});
		
		$("#role").formValidator({onshow:"��ѡ�����Ա�Ľ�ɫ",onfocus:"��ɫ����ѡ��",oncorrect:"лл������"}).InputValidator({min:1,onerror: "���ǲ�������ѡ���ɫ��!"});
		$("#adminGroup").formValidator({onshow:"��ѡ�����Ա�Ľ�ɫ",onfocus:"�������ѡ��",oncorrect:"лл������"}).InputValidator({min:1,onerror: "���ǲ�������ѡ�������!"});

		
		// eidt
		
		$("#editPassword").formValidator({
			empty:true,
			onshow : "���޸����������ա�",
			onfocus : "����������",
		}).InputValidator({
			min : 6,
			onerror : "���볤�Ȳ�������λ"
		});
		$("#editPassword2").formValidator({
			empty:true,
				onshow:"���޸����������ա�",
				onfocus:"�����������һ��Ŷ",
				oncorrect:"����һ��"}).
			InputValidator({
				min:1,onerror:"�ظ����벻��Ϊ��,��ȷ��"
			}).CompareValidator({
				desID:"editPassword",
				operateor:"=",
				onerror:"2�����벻һ��,��ȷ��"
				});

	});