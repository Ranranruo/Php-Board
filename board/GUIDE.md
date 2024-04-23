

documentRoot 기준으로 index.php 실행을 하고 index.php 에서는 상위 폴더 있는 PHP 파일 require 한다.
.htaccess 는 웹에서 index.php 가 아닌 다른 경로로 접근 했을 때 index.php 를 실행시키게 한다.

index.php 에서 lib.php, router.php require 

DB.php 
lib.php => 보조 함수들을 모아두는 곳
router.php 

controller : URL 별 코드를 작성한다.

 Router Class 
  static []

  path 

  handleRequets : 마지막에 실행

  get
  post 

  /board/1
  /board/2
  /board/3
  /board/4


/restAPI/reservations/{date}

/restAPI/reservations/20220917
/restAPI/reservations/20220917sdasad

$handler($matches)



index.php 
 db.php
 lib.php (view)
 router.php
 user.controller.php = ROUTE.PHP 에 있는 GET, POST 함수들 이용해서 ROUTER 클래스의 routes 에 특정 method 및 URL 일 떄 실행되야하는 함수들 넣어두고 
 board.controller.php  = ROUTE.PHP 에 있는 GET, POST 함수들 이용해서 ROUTER 클래스의 routes 에 특정 method 및 URL 일 떄 실행되야하는 함수들 넣어두고 

 router::handlers() = 
   URL
    METHOD
   ROUTE routes foreach 
     if method ? pass 
    if url 일치하면 
     handle(url 데이터)

    pages/
      


      


