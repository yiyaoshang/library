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
		$("#actionName").formValidator({
			onshow : "������action����",
			onfocus : "������action����",
		}).InputValidator({
			min : 1,
			onerror : "�������action������Ϊ��"
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