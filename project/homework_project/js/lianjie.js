const http=require('http');
//创建服务器
var server=http.createServer();
//设置端口号
server.listen(8024);
//绑定监听事件：请求事件
const fs=require("fs");
const url=require("url");
const path=require("path")
// const mysql=require("mysql");
server.on("request",(req,res)=>{
	//req->request:请求：前端发到后端的东西
	//res->response:响应：把后端的东西发到前端
	var objUrl=url.parse(req.url,true);
	var pn=objUrl.pathname
	// console.log(req.url)
	console.log(pn)
	// var ly_path=path.resolve(__dirname)
	if(req.url=="/" || req.url=="/index"){
		pn="/HOME"
		fs.readFile(`d:/xampp/htdocs/project/homework_project/html${pn}.html`,(err,buf)=>{
			console.log(err)
		    res.end(buf);
		})
		// console.log(111111111)
	}
	else if(pn.indexOf(".css")!=-1){
		fs.readFile(`d:/xampp/htdocs/project/homework_project/${pn}`,(err,buf)=>{
			console.log(err)
		    res.end(buf);
		})
	}else if(pn.indexOf(".js")!=-1){
		fs.readFile(`d:/xampp/htdocs/project/homework_project/${pn}`,(err,buf)=>{
			console.log(err)
		    res.end(buf);
		})
	}else if(pn.indexOf(".jpg")!=-1){
		fs.readFile(`d:/xampp/htdocs/project/homework_project/${pn}`,(err,buf)=>{
			console.log(err)
		    res.end(buf);
		})
	}else if(pn.indexOf(".html")!=-1){
		fs.readFile(`d:/xampp/htdocs/project/homework_project/html/${pn}`,(err,buf)=>{
		    res.end(buf);
		})
	}
})


console.log("服务器端已经开启");
