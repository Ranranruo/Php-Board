<?php
session_start();

require_once "../app/lib/DB.php";
require_once "../app/lib/router.php";
require_once "../app/lib/views.php";
require_once "../app/controller/page.php";
require_once "../app/controller/posts.php";
require_once "../app/controller/auth.php";

Router::handleRequest();
// db랑 통신하는 컨트롤러랑
// mvc 패턴 하면서 모델에 들어갈 데이터 가져와서 view 로 넘겨주는 컨트롤러랑 둘다 만들려는데 폴더구조를 어떻게 하면 좋을지

/*
 DB 통신을 DB.php => 
  
- 페이지를 보여줄 때 게시판 있는데 게시글 불러오는데(DB Query) 게시글을 모델에 담고 모델을 뷰에 보내준다 

  - GER /board function 

  router.php
    .htaccess => 경로 이동을 하면 php 파일이 없을 떄 index.php 리다이렉트시킨다.
    documentRoot:public/index.php
                 app/

    
    무조건 index.php 가 먼저 실행되어야함 (router)
    

  $boards = DB.get("select * from boarrs");
  $data = (object)[]
  $data->board = $boards;
  
  view()
   $dsa
   view 

  
  lib.php (view) => php 객체 
  


 MVC
  - M
    - DAO : DB.php 
    - DTO, VO : DB에서 데이터를 불러왔을 때 당시에 Java 타입 => JAVA Class , 
      - User dsadas =  DB select * from users 
    - SERVICE
      - User 
  - C
  - V

  - C, V, M:DAO
*/