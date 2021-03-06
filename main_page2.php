/*필요없는 파일 버리기 */
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Team13</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/51db22a717.js" crossorigin="anonymous"></script>
    <style type = "text/css">
        :root{
            --body-background-color:white;
            --font-color: #4e4e4e;
            --border-gray-color :#d3345b;
            --naver-green-color: #d3345b;
            --naver-green-border-color: #d3345b;
        }
        h1{
            color:rgb(214, 97, 117);
            text-align:center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-style: bold;
            font-size:40px;
        }
        *{
            margin:0;
            padding:0;
        }

        body{
            background:var(--body-background-color);
        }

        .main-container{
            width:100%;
            display:flex;
            flex-direction:column;
            align-items:center;
            margin-top: 21px;
        }
        .main-container .main-wrap{
            width:768px;

        }
        .main-container .main-wrap .sel-lang-wrap .lang-select
        {
            width: 96px;
            height: 30px;
            color: var(--font-color);
            border: solid 1px var(--border-gray-color);
        }
        .main-container .main-wrap .logo-wrap{
            padding-top:55px;
        }
        .main-container .main-wrap .logo-wrap img
        {
            width: 231px;
            height: 44px;
        }

        .main-container .main-wrap header .sel-lang-wrap{
            display:flex;
            justify-content:flex-end;
        }

        .main-container .main-wrap header .logo-wrap{
            display:flex;
            flex-direction: column;
            align-items: center;
        }
        .login-input-section-wrap{
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-input-wrap{
            width: 465px;
            height :48px;
            border: solid 1px var(	--border-gray-color );
            background: white;
        }
        .password-wrap{
            margin-top: 13px;
        }
        .login-input-wrap input{
            border: none;
            width:430px;
            margin-top: 10px;
            font-size: 14px;
            margin-left: 10px;
            height:30px;
        }
        .login-button-wrap {
            padding-top: 13px;
        }
        .login-button-wrap button{
            width: 465px;
            height :48px;
            font-size: 18px;
            background: var(--naver-green-color);
            color: white;
            border: solid 1px var(--naver-green-border-color);
        }
        .Easy-sgin-in-wrap{
            text-align: center;
        }
        .Easy-sgin-in-wrap .sign-button-list
        {
            padding-top:25px;
            list-style: none;
            width: 465px;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .Easy-sgin-in-wrap .sign-button-list li button{
            width: 465px;
            height: 56px;
            border: solid 1px var(--border-gray-color);
            text-align: middle;
            align-items: center;
            background: white;
            align-items: center;
        }
        .Easy-sgin-in-wrap .sign-button-list li button i{
            padding-left: 15px;
            font-size: 20px;
        }
        .Easy-sgin-in-wrap .sign-button-list li button span{
            padding-left: 20px;
            font-size: 18px;
        }
        .Easy-sgin-in-wrap .forget-msg{
            color:var(--font-color);
            font-size: 14px;
            padding-top: 10px;

        }
        .Easy-sgin-in-wrap .sign-button-list li{
            padding-bottom: 10px;
            padding-left: 15px;
            font-size: 20px;
            align-items: center;
            text-align: center;
            border-color: #d3345b;
        }

        h1{
            color:rgb(214, 97, 117);
            text-align:center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-style: bold;
            font-size:40px;
        }
        div.button
        {
            margin: auto;
            width: 50%;
        }

        div.button input
        {
            padding: 5px;
            width: 100%;
            font-size: 18px;
        }

        #topMenu{
            height :50px;
            width : 100%;
            align-self: center;
            text-align:center;
            list-style:none;
            color:white;
            background-color: rgb(245, 150, 166);
            float:left;
            line-height:30px;
            display:inline;
            padding:10px;
            vertical-align: middle;

        }


        #topMenu li{
            display:inline;
            padding:auto;
        }
        #topMenu a{
            display:inline;
            padding:100px;
            margin: 20px;
        }

        #topMenu .menuLink{
            text-decoration:none;
            color: white;
            display: inline;
            width: 150px;
            padding:10px;
            font-size: 17px;
            font-weight: bold;
            font-family: "Trebuchet MS", Dotum, Arial;

        }
        #topMenu .menuLink:hover{
            color : white;
            background-color:#d3345b;

        }
        #home{
            text-decoration-color: white;
            color : white;
            background-color: #d3345b;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            float:right;
            width: 80px;
            height :30px;
            border-radius:10px;
            margin:3px;
            font-size: 15px;
            background: var(--naver-green-color);
            border: solid 1px var(--naver-green-border-color);

        }
        #login_button{
            text-align:center;
            padding:7px 0;
            text-decoration: none;
            display:inline-block;
            font-size: 15px;
            margin:2px;
            cursor:pointer;

            border-color: white;
            color:white;
            border-radius:10px;
            float: right;
        }

        #div.button
        {
            margin: auto;
            width: 50%;
        }

        #div.button input
        {
            padding: 5px;
            width: 100%;
            font-size: 18px;
        }

    </style>
</head>

<body>
<div class="main-container">
    <div class="main-wrap">
        <br>
        <h1> Health Care Service </h1>
        <br>
        <br>
        <button type="button" onclick="location.href='main_page.html'" id="home">Home</button>
        <button type="button" onclick="location.href='Logout.php'" id="home">Log Out</button>
        <button type="button" onclick="location.href='register.php'" id='home'>Sign Up</button>

        <br>
        <br>
        <br>
        <nav id="topMenu">
            <ul>
                <li><a class="menuLink" href="food_info.html">Food Information</a></li>
                <li><a class="menuLink" href="food_recipe_list.php">Food Recipe</a></li>
                <li><a class="menuLink" href="exercise.html">Excercise Calculation</a></li>
                <li><a class="menuLink" href="needed_cal_nut.html">Check Health</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <br>
        <br>
    </div>

    <p style="font-size: 30px; font-weight: bold;"> 누적 조회수 순위 </p>
    <?php

                        include 'db_info.php';
                        $resultViewName = array();
                        $resultViewRank = array();
                        $resultViewNum = array();
                        $resultPic = array();

                        $viewsql = "select A.RCP_NM, A.ATT_FILE_NO_MAIN, B.view_num, dense_rank() over(order by B.view_num desc) as view_rank from recipe AS A INNER JOIN view_table AS B  ON B.view_index = A.RCP_INDEX limit 10;
";

                         $result=mysqli_query($mysqli,$viewsql);

            while($row=mysqli_fetch_assoc($result)){
                $resultViewName[]=$row["RCP_NM"];
                $resultViewRank[]=$row["view_rank"];
                $resultViewNum[]=$row["view_num"];
                $resultPic[]=$row["ATT_FILE_NO_MAIN"];
            }

             $num=count($resultViewName);

             for($i=0;$i<$num;$i++){
                             ?>

    <div class="input-group col-xs-12" style="margin-top:1rem; box-sizing:border-box; width:40%; height:fit-content; border: 1rem; border-color: rgb(245, 150, 166); border-radius: 1rem; padding: 1rem;">

        <p style="font-size: 12px; font-weight: bold;"> <?php echo $resultViewRank[$i] ?> 등 </p>
        <a style="font-size: 20px; font-weight: bold;"  href="food_recipe.php?recipe_food_name=<? echo $resultViewName[$i] ?>" > <?php echo $resultViewName[$i] ?></a>
        <p style="font-weight: bold;"> 조회수 : <?php echo $resultViewNum[$i] ?> </p>

        <style type="text/css">
            a:link { color: black; text-decoration: none;}
            a:visited { color: black; text-decoration: none;}
            a:hover { color: red; text-decoration: underline;}
        </style>

    </div>



    <?php
                         }




        ?>

    <p style="font-size: 30px; font-weight: bold;"> 최근 조회된 레시피 </p>
    <?php

                        include 'db_info.php';
                        $resultViewName = array();
                        $resultViewRank = array();
                        $resultViewNum = array();
                        $resultViewPerRank = array();

                        $viewsql = "select A.RCP_NM, B.late_view, rank() over(order by B.late_view desc) as view_rank from recipe AS A INNER JOIN view_table AS B  ON B.view_index = A.RCP_INDEX limit 10;
";

                         $result=mysqli_query($mysqli,$viewsql);

            while($row=mysqli_fetch_assoc($result)){
                $resultViewName[]=$row["RCP_NM"];
                $resultViewRank[]=$row["view_rank"];
                $resultViewPerRank[] = $row["view_percentrank"];
                $resultViewNum[]=$row["late_view"];

            }

             $num=count($resultViewName);

             for($i=0;$i<$num;$i++){
                             ?>

    <div class="input-group col-xs-12" style="margin-top:1rem; box-sizing:border-box; width:40%; height:fit-content; border: 1rem; border-color: rgb(245, 150, 166); border-radius: 1rem; padding: 1rem;">

        <p style="font-size: 12px; font-weight: bold;"> <?php echo $resultViewRank[$i] ?> 등 </p>
        <a style="font-size: 20px; font-weight: bold;"  href="food_recipe.php?recipe_food_name=<? echo $resultViewName[$i] ?>" > <?php echo $resultViewName[$i] ?></a>
        <p style="font-weight: bold;"> 최근 조회 시간 : <?php echo $resultViewNum[$i] ?> </p>


        <style type="text/css">
            a:link { color: black; text-decoration: none;}
            a:visited { color: black; text-decoration: none;}
            a:hover { color: red; text-decoration: underline;}
        </style>

    </div>



    <?php
                         }
                          mysqli_close($mysqli);

?>
</div>
</body>
</html>