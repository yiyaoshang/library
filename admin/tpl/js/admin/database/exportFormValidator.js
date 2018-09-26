/**
 * 
 */
	$(document).ready(function() {
		//$.formValidator.initConfig({onError:function(){alert("校验没有通过，具体错误请看错误提示")}});
		$.formValidator.initConfig({
			onError : function(msg) {
				alert(msg);
			}
		});
		$("#sizelimit").formValidator({
			onshow : "请输入分卷文件大小",
			onfocus : "请输入分卷文件大小",
		}).InputValidator({
			min : 1,
			onerror : "你输入的分卷文件大小不能小于1024K"
		});
		$("#chineseName").formValidator({
			onshow : "请输入操作中文名称",
			onfocus : "请输入操作中文名称",
		}).InputValidator({
			min : 1,
			onerror : "你输入的操作名不能为空"
		});
		
		$("#moduleName").formValidator({
			onshow : "请输入模块名称",
			onfocus : "请输入模块名称",
		}).InputValidator({
			min : 1,
			onerror : "你输入的模块不能为空"
		});
		$("#controllerName").formValidator({
			onshow : "请输入控制器名称",
			onfocus : "请输入控制器名称",
		}).InputValidator({
			min : 1,
			onerror : "你输入的控制器不能为空"
		});
	});