<?php
  include 'head.php';
?>
<title>Music</title>
<body>
<center><audio id='aaudios' src='http://ok9ylzfyr.bkt.clouddn.com/Innocence%20-%20Avril%20Lavigne.mp3' loop="loop" controls="controls"></center></audio>

<style>
  #me li{
  padding:10px;
border-width :1px;
border-style:solid;
margin:2px;
float:left;
  }
</style>
<div id='mus'>
<ol id='me'>
<?php
  $syss=
  "
Waking up I see that everything is ok
睁开双眼 我发现 一切如期上演
The first time in my life and now it's so great
我的生活从未如此美好呈现
Slowing down I look around and I am so amazed
放慢脚步环顾四面 我感到惊艳
I think about the little things that make life great
那些让生活美好的细节我开始看见
I wouldn't change a thing about it
我不会让它改变
This is the best feeling
这感觉毫无缺陷
This innocence is brilliant,
这份纯真 如此迷人
I hope that it will stay
我希望它留存
This moment is perfect,
完美的一瞬
please don't go away,
请就此停顿
I need you now
现在是我需要你的时候
And I'll hold on to it,
我会深深留住这感受
don't you let it pass you by
别让它从你身边溜走
I found a place so safe, not a single tear
这片空间 很安全 我不再有泪眼
The first time in my life and now it's so clear
我的生活从未如此清晰呈现
Feel calm I belong, I'm so happy here
不再狂躁开始留恋 这是我的乐园
It's so strong and now I let myself be sincere
强烈的震撼现在我让自己变得诚虔
I wouldn't change a thing about it
我不会让它改变
This is the best feeling
这感觉毫无缺陷
This innocence is brilliant,
这份纯真 如此迷人
I hope that it will stay
我希望它留存
This moment is perfect,
完美的一瞬
please don't go away,
请就此停顿
I need you now
现在是我需要你的时候
And I'll hold on to it,
我会深深留住这感受
don't you let it pass you by
别让它从你身边溜走
It's the state of bliss you think you're dreaming
命运的眷顾让你以为这是梦幻
It's the happiness inside that you're feeling
而你真切感到幸福的浸染
It's so beautiful it makes you wanna cry
如此美丽令你不禁泪眼潸然
It's the state of bliss you think you're dreaming
命运的眷顾让你以为这是梦幻
It's the happiness inside that you're feeling
而你真切感到幸福的浸染
It's so beautiful it makes you wanna cry
如此美丽令你不禁泪眼潸然
It's so beautiful it makes you want to cry
如此美丽令你不禁泪眼潸然
This innocence is brilliant,
这份纯真 如此灿烂
it makes you want to cry
令你不禁泪眼潸然
This innocence is brilliance,
这份纯真 如此珍贵
please don't go away
请不要消退
Cause I need you now
因为现在是我需要你的时候
And I'll hold on to it,
我会深深留住这感受
don't you let it pass you by
别让它从你身边溜走
This innocence is brilliant,
这份纯真 如此迷人
I hope that it will stay
我希望它留存
This moment is perfect,
完美的一瞬
please don't go away,
请就此停顿
I need you now
现在是我需要你的时候
And I'll hold on to it,
我会深深留住这感受
don't you let it pass you by
别让它从你身边溜走
  ";
  $servername = "localhost";
  $username = "shudasit_shuda";
  $password = "ma18223";
  $dbname = "shudasit_shuda";

  // 创建连接
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // 检测连接
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());}
  
  
  $sql = "SELECT singer,name,src,sys,id FROM music order by singer desc ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // 输出每行数据
      while($row = $result->fetch_assoc()) {
          echo '<li><a href="javascript:void(0)" onclick='.'da("'.$row['src'] .'","'.$row[id].'")'.' >' .$row[singer].'--' .$row['name'].'</a></li><br><br><br>';
                                            }  
          echo '<p id="sys"><pre>'.$syss.'</pre></p>';
                              }
// $conn->close();
?>
</ol>
</div>
<script>
  function da(qf,id){
    var qq=qf;
    var cha=document.getElementById("aaudios");
    cha.setAttribute("src",qq);
    document.getEle
    var xmlhttp;    
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("sys").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","music/sys.php?id="+id,true);
  xmlhttp.send();
  }
  
  
</script> 
<?php
  include 'footer.php'
?>
</body>