/**
 * 
 */
	$(document).ready(function() {
		//$.formValidator.initConfig({onError:function(){alert("У��û��ͨ������������뿴������ʾ")}});
		$.formValidator.initConfig({
			onError : function(msg) {
				alert(msg);
			}
		});
		$("#sizelimit").formValidator({
			onshow : "������־��ļ���С",
			onfocus : "������־��ļ���С",
		}).InputValidator({
			min : 1,
			onerror : "������ķ־��ļ���С����С��1024K"
		});
		$("#chineseName").formValidator({
			onshow : "�����������������",
			onfocus : "�����������������",
		}).InputValidator({
			min : 1,
			onerror : "������Ĳ���������Ϊ��"
		});
		
		$("#moduleName").formValidator({
			onshow : "������ģ������",
			onfocus : "������ģ������",
		}).InputValidator({
			min : 1,
			onerror : "�������ģ�鲻��Ϊ��"
		});
		$("#controllerName").formValidator({
			onshow : "���������������",
			onfocus : "���������������",
		}).InputValidator({
			min : 1,
			onerror : "������Ŀ���������Ϊ��"
		});
	});