<!DOCTYPE html>
<html>

<!-- Mirrored from developer.alexanderklimov.ru/android/fragment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:19:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset=utf-8>

<title>Android: Fragment (Фрагменты)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le styles -->
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 10px;
  }
  .sidebar-nav {
    padding: 9px 0;
  }
</style>
	
<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
	
   <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />   
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        
        <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
			<a data-toggle="modal" href="#myModal" class="navbar-link">Гость</a>
          </p>
          <ul class="nav">
            
          </ul>
        </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span5">
        <p>
		<a href="http://developer.alexanderklimov.ru/"><img src="../images/header.png" alt="Сайт разработчика Александр Климова" border="0"/></a>
		</p>
    
    </div><!--/span-->
    
	<div class="span5">
        <p style="color:green; font-style: italic; font-size: small;">
		/* Моя кошка замечательно разбирается в программировании. Стоит мне объяснить проблему ей - и все становится ясно. */<br>John Robbins, Debugging Applications, Microsoft Press, 2000
		</p>
    </div><!--/span-->
    
	<div class="span2">
        <p>
		<a href="http://feeds.feedburner.com/alexanderklimov/VJcl"><img src="../kot-2-rss-100.png" border="0"></a>
		</p>
    </div><!--/span-->
</div><!--/row-->	
<div class="clearfix"></div>
	
<noindex><!--Rating@Mail.ru COUNTER--><script language="JavaScript" type="text/javascript"><!--
d=document;var a='';a+=';r='+escape(d.referrer)
js=10//--></script><script language="JavaScript1.1" type="text/javascript"><!--
a+=';j='+navigator.javaEnabled()
js=11//--></script><script language="JavaScript1.2" type="text/javascript"><!--
s=screen;a+=';s='+s.width+'*'+s.height
a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth)
js=12//--></script><script language="JavaScript1.3" type="text/javascript"><!--
js=13//--></script><script language="JavaScript" type="text/javascript"><!--
d.write('<IMG src="http://db.c7.b3.a0.top.mail.ru/counter'+
'?id=228158;js='+js+a+';rand='+Math.random()+
'" height="1" width="1" alt="top.mail.ru" border="0" />')
if(11<js)d.write('<'+'!-- ')//--></script><noscript><img
src="http://top-fwz1.mail.ru/counter?js=na;id=228158"
height="1" width="1" alt="top.mail.ru" border="0" /></noscript><script language="JavaScript" type="text/javascript"><!--
if(11<js)d.write('--'+'>')//--></script><!--/COUNTER--></noindex><ul class="nav nav-pills">
<li class=""><a href="http://rusnetframework.blogspot.com/">Блог</a></li>
<li class=""><a href="http://developer.alexanderklimov.ru/index.php">C#/Visual Basic</a></li>
<li class=""><a href="http://developer.alexanderklimov.ru/windowsphone/wp.php">Windows Phone</a></li>
<li class=""><a href="http://developer.alexanderklimov.ru/wpf/wpf.php">WPF</a></li>
<li class=""><a href="http://developer.alexanderklimov.ru/php">PHP</a></li>
<li class=""><a href="http://developer.alexanderklimov.ru/silverlight/silverlight.php">Silverlight</a></li>
<li class="active"><a href="http://developer.alexanderklimov.ru/android">Android</a></li>
<li class=""><a href="http://developer.alexanderklimov.ru/arduino">Arduino</a></li>
</ul>
<div class="container-fluid">
    
	<div class="row-fluid">
        <!--левое меню -->
		<div class="span2">
            <div class="well sidebar-nav">
            <ul class="nav nav-list">
<li class=""><a href="index-2.html">Главная</a></li>
<li class="active"><a href="theory/index.html">Теория</a></li>
<li class=""><a href="views.html">Palette</a></li>
<li class=""><a href="listview/index.html">ListView</a></li>
<li class=""><a href="catshop/catshop.html">Котошоп</a></li>
<li class=""><a href="animation.html">Анимация</a></li>
<li class=""><a href="sqlite/index.html">SQLite</a></li>
<li class=""><a href="opengles/index.html">OpenGL ES</a></li>
<li class=""><a href="library/index.html">Библиотеки</a></li>
<li class=""><a href="games/index.html">Игры</a></li>
<li class=""><a href="emulator.html">Эмулятор</a></li>
<li class=""><a href="tips-android.html">Советы</a></li>
<li class=""><a href="articles-android.html">Статьи</a></li>
<li class=""><a href="books.html">Книги</a></li>
<li class=""><a href="java/java.html">Java. Экспресс-курс</a></li>
<li class=""><a href="design/index.html">Дизайн</a></li>
<li class=""><a href="opensource.html">Open Source</a></li>
<li class=""><a href="links.html">Полезные ресурсы</a></li>
</ul>            </div><!--/.well -->
        </div><!--/span-->


        <div class="span8">

		<div class="row-fluid">
            <div class="span12">
			
			            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Читайте на здоровье!</h3>
            </div>
            <div class="modal-body">
            
              <p>Статья проплачена кошками - всемирно известными производителями котят.</p>

            <p>Если статья вам понравилась, то можете <a href="http://developer.alexanderklimov.ru/donate.php">поддержать проект</a>.</p>
			
			            
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Закрыть</button>
              
            </div>
          </div>
<h1 class="text-warning">Fragment (Фрагменты)</h1>

<p><img src="theory/fragment_cat.jpg" alt="Кот из фрагментов"></p>

<p>Фрагменты немного пугают новичков. Постараюсь объяснить как можно проще, чтобы отдельные фрагменты пазла сложились в единую картину.</p>

<h2 class="text-warning">Зачем?</h2>

<p>Создатели операционной системы оказались недальновидными разработчиками. Не посоветовавшись с котами, они разработали систему под маленькие экраны телефонов. Но котам было неудобно пользоваться такими экранами, и тогда придумали планшеты.</p>

<p><img src="../../img0.joyreactor.cc/pics/post/%d0%ba%d0%be%d1%82%d1%8d-%d0%b3%d0%b8%d1%84%d0%ba%d0%b8-%d0%b8%d0%b3%d1%80%d1%83%d1%88%d0%ba%d0%b0-%d1%80%d0%b0%d0%b4%d0%be%d1%81%d1%82%d1%8c-822593.gif"></p>

<p>Старые программы прекрасно на них запускались, но  обнаружилось несколько недостатков. На больших экранах интерфейс выглядел не слишком элегантно, появились большие пустые пространства. И тогда возникла идея объединить два отдельных экрана из смартфона в один экран на планшете. Это самый классический пример применения фрагмента. По сути, это костыль. Возможно, если бы сразу подумали головой, то придумали бы более элегантное решение. Но теперь поздно пить Боржоми, будем использовать предложенную концепцию.</p>

<p>Фрагменты были представлены в API 11 (Android 3.0), но в целях совместимости была написана специальная библиотека <b>Android Support library</b> для старых устройств. Я буду рассказывать только о новых версиях, так как большого смысла поддерживать старые устройства не вижу.</p>

<p>При желании можно было написать приложение в старом стиле, отслеживая размеры экрана. Но такой код получится слишком сложным. Пришлось бы писать один код для переключения от одной активности к другой при использовании смартфона и другой код, когда взаимодействие между объектами происходит на одном экране в планшете. Чтобы устранить это противоречие, были придуманы фрагменты.</p>

<p>Теперь несколько слов о том, как проще воспринимать фрагмент. Считайте, что фрагмент - это тот же компонент как <b>Button</b>, <b>TextView</b> или <b>LinearLayout</b> с дополнительными возможностями. Фрагмент, как и кнопку, нужно поместить на активность. Но фрагмент является модульным компонентом и один и тот же фрагмент можно встроить в две разные активности. Например, с кнопкой такой номер не пройдёт. Для каждой активности вы должны создать свою отдельную кнопку, даже если их нельзя будет отличить друг от друга.</p> 

<p>Но фрагменты - это не замена активности, они не существуют сами по себе, а только в составе активностей. Поэтому в манифесте прописывать их не нужно. Но в отличие от стандартной кнопки, для каждого фрагмента вам придётся создавать отдельный класс.</p>

<p>Специальный менеджер фрагментов может контролировать все классы фрагментов и управлять ими.</p>

<p>Фрагменты являются строительным материалом для приложения. Вы можете в нужное время добавить новый фрагмент, удалить ненужный фрагмент или заменить один фрагмент на другой. Точно также мы собираем пазл - подносим фрагмент кота в общую картину, иногда ошибаемся и тогда заменяем кусочек пазла на другой и т.д.</p>

<p>Фрагмент может иметь свою разметку, а может обойтись без неё. Также у фрагмента есть свой жизненный цикл, во многом совпадающий с жизненным циклом активности. Пожалуй, это единственное сходство с активностью.</p>

<p>Есть два варианта использования фрагментов (при желании можно использовать сразу оба варианта). Первый вариант заключается в том, что вы в разметке сразу указываете фрагмент с помощью тега <b>fragment</b>, так же как и с кнопкой.</p>

<p>Второй вариант использует динамическое подключение фрагмента. Принцип следующий - в разметку помещается макет, который становится контейнером для фрагмента. Обычно, для этой цели используют <b>FrameLayout</b>, но это не обязательное условие. И в нужный момент фрагмент замещает контейнер и становится частью разметки.</p>

<p>Поначалу фрагменты кажутся неудобными, так как количество кода увеличивается. Но если с ними работать постоянно, то станет понятнее их принцип. И желательно все новые проекты создавать уже при помощи фрагментов.

<p>Кстати, Android Studio для стандартного проекта типа <b>Hello World</b> сразу использует фрагменты.</p>

<h3 class="text-warning">Работаем по старинке</h3>

<p>Чтобы было легче перестроиться на новую технологию, начнём издалека и создадим сначала стандартную программу. Набросаем на экран несколько кнопок и других компонентов.</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/LinearLayout1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_horizontal&quot;
    android:orientation=&quot;vertical&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;Button
        android:id=&quot;@+id/button1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Рыжик&quot; /&gt;

    &lt;Button
        android:id=&quot;@+id/button2&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Барсик&quot; /&gt;

    &lt;Button
        android:id=&quot;@+id/button3&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Мурзик&quot; /&gt;

    &lt;TextView
        android:id=&quot;@+id/textView1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Описание кота&quot;
        android:textAppearance=&quot;?android:attr/textAppearanceLarge&quot; /&gt;

    &lt;ImageView
        android:id=&quot;@+id/imageView1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:scaleType=&quot;fitCenter&quot;
        android:src=&quot;@drawable/cat_yellow&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p><img src="images/fragment5.png"></p>

<p>Думаю, вам уже не составит труда написать код для кнопок, чтобы в нижней части экрана менялась картинка и текстовое содержание про каждого кота. Но я этого делать пока не буду.</p>

<h3 class="text-warning">Заворачиваем в фрагменты</h3>

<p>Логически экран можно разделить на две части - верхняя неизменяемая часть с кнопками и нижняя часть с текстовым блоком и контейнером для картинки, которая изменяет свой вид в зависимости от нажатой кнопки.</p>

<p>Создадим две отдельные разметки и скопируем нужные части из общей разметки в разметки для фрагментов. В папке <b>res/layout</b> создаём новый файл <b>fragment1.xml</b> и размещаем верхнюю часть кода</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot; &gt;

    &lt;Button
        android:id=&quot;@+id/button1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Рыжик&quot; /&gt;

    &lt;Button
        android:id=&quot;@+id/button2&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Барсик&quot; /&gt;

    &lt;Button
        android:id=&quot;@+id/button3&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Мурзик&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Также поступаем со вторым фрагментом - создаём новый файл <b>fragment2.xml</b> и в него копируем код из нижней части кода</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot; &gt;

    &lt;TextView
        android:id=&quot;@+id/textView1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Описание кота&quot;
        android:textAppearance=&quot;?android:attr/textAppearanceLarge&quot; /&gt;

    &lt;ImageView
        android:id=&quot;@+id/imageView1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:scaleType=&quot;fitCenter&quot;
        android:src=&quot;@drawable/cat_yellow&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>В обоих случаях мы вставляли код в корневой контейнер <b>LinearLayout</b>. Но если у вас была бы более сложная разметка с использованием контейнерных элементов, то вы могли бы копировать сразу готовый кусок кода без необходимости оборачивать его корневым элементом, как в нашем случае.</p>

<p>Пока мы создали разметки для будущих фрагментов. Теперь нужно создать отдельные классы для двух фрагментов. Выбираем на панели инструментов значок <b>New Java Class</b>, чтобы вызвать мастер создания класса и присваиваем имя <b>Fragment1</b>, а в поле <b>Superclass</b> выбираем <b>android.app.Fragment</b>.</p>

<p>Появится заготовка следующего вида:</p>

<pre class="code java">
package ru.alexanderklimov.fragmentdemo;

import android.app.Fragment;

public class Fragment1 extends Fragment {

}
</pre>

<p>Самостоятельно создайте класс для второго фрагмента <b>Fragment2</b>.</p>

<p>Настало время подключить разметки к фрагментам. В активностях мы подключали разметку в методе <b>onCreate()</b> через метод <b>setContentView()</b>. В фрагментах метод <b>onCreate()</b> служит для других задач. А для подключения разметки используется отдельный метод <b>onCreateView()</b>.</p>

<p>Если у вас открыт код для <b>Fragment1</b>, то выбираем в меню <b>Source | Override/Implements Methods...</b> и ищем в списке метод <b>onCreateView()</b>. В код фрагмента будет вставлен следующий шаблон:</p>

<pre><code class="java">
@Override
public View onCreateView(LayoutInflater inflater, ViewGroup container,
		Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	return super.onCreateView(inflater, container, savedInstanceState);
}
</code></pre>

<p>У метода используются три параметра. В первом параметре используется объект класса <b>LayoutInflater</b>, который позволяет построить нужный макет, считывая информацию из указанного XML-файла. Удалим строчку, которая возвращает результат и напишем свой вариант.</p>

<pre><code class="java">
@Override
public View onCreateView(LayoutInflater inflater, ViewGroup container,
		Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	//return super.onCreateView(inflater, container, savedInstanceState);
	
	View viewHierarchy = 
			inflater.inflate(R.layout.fragment1, 
			container, false);
			return viewHierarchy;
}
</code></pre>

<p>Для удобства код разбит на две части. Сначала мы получаем объект <b>View</b>, а затем уже его возвращаем в методе.</p>

<p>Скопируйте код метода <b>onCreateView()</b> и вставьте его в код класса <b>Fragment2</b>, не забыв указать разметку <b>R.layout.fragment2</b>.</p>

<p>Остальные два параметра <b>container</b>, <b>false</b> используются в связке и указывают на возможнось подключения фрагментов в активность через контейнер. Мы обойдёмся без контейнеров, а создадим собственные блоки для фрагментов, поэтому у нас используется значение <b>false</b>.</p>

<p>Возвращаемся к главной разметке активности и заменяем код через блоки <b>fragment</b>, указывая в атрибуте <b>name</b> имена классов созданных фрагментов.</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/LinearLayout1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_horizontal&quot;
    android:orientation=&quot;vertical&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;fragment
        android:id=&quot;@+id/fragment1&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment1&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/fragment2&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment2&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Конечно, это слишком минимальный код. Давайте укажем другие параметры, например, размеры:</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/LinearLayout1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_horizontal&quot;
    android:orientation=&quot;vertical&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;fragment
        android:id=&quot;@+id/fragment1&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;0dp&quot;
        android:layout_weight=&quot;1&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/fragment2&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment2&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;0dp&quot;
        android:layout_weight=&quot;1&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Если переключиться в графический режим, то увидите серые блоки и текст, который подсказывает, что можно подключить нужную разметку для фрагмента через контекстное меню. Нажимаем правой кнопкой мыши на фрагменте и выбираем пункт <b>Fragment Layout... | fragment1</b> и повторяем шаги для второго фрагмента. Внешне мы получим такой же результат, как и без фрагментов.</p>

<p><img src="images/fragment6.png"></p>

<p>На всякий случай подскажу, что если хотите вернуться обратно к серым блокам, то там же в контекстном меню выбираете <b>Fragment Layout... | Clear</b>.</p>

<p>Если сейчас запустим приложение, то тоже никаких изменений не увидим. Зачем тогда потратили столько времени на создание фрагментов? Непонятно.</p>

<p>А, я понял. Можно теперь писать в резюме про свои умения: использую фрагменты.</p>

<p>Однако, продолжим. Если повернуть устройство в альбомной ориентации, то программа будет выглядеть не слишком красиво.</p>

<p><img src="images/fragment7.png"></p>

<p>Мы знаем, что можно создать отдельную папку <b>res/layout-land</b> и разместить там разметку для такого случая. Скопируем файл <b>activity_main.xml</b> и изменим его структуру</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/LinearLayout1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;horizontal&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    android:baselineAligned=&quot;false&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;fragment
        android:id=&quot;@+id/fragment1&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment1&quot;
        android:layout_width=&quot;0dp&quot;
        android:layout_height=&quot;match_parent&quot;
        android:layout_weight=&quot;1&quot;
        tools:layout=&quot;@layout/fragment1&quot; /&gt;

    &lt;fragment
        android:id=&quot;@+id/fragment2&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment2&quot;
        android:layout_width=&quot;0dp&quot;
        android:layout_height=&quot;match_parent&quot;
        android:layout_weight=&quot;1&quot;/&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Совсем другое дело. Теперь в альбомной ориентации приложение выглядит намного лучше.</p>

<p><img src="images/fragment8.png"></p>

<p>Но это мы могли сделать и без фрагментов. Зачем же они нужны? Пока версия с лишней строчкой в резюме остаётся основной - чтобы работодатель уважал за прогрессивный стиль.</p>

<p>Хотя небольшое удобство есть. Благодаря модульности, мы поменяли разметку только у фрагментов, а то, что было внутри фрагментов (кнопки, текстовые блоки и т.д.), мы не трогали.</p>

<p>Как уже говорилось, фрагменты были придуманы для того, чтобы обеспечить быстрое написание приложения под разные типы экранов - для смартфонов и планшетов. Часто бывает так, что на смартфоне на первом экране находится список, а когда пользователь нажимает на отдельный элемент списка, то запускается отдельная активность. А на планшете можно уместить список и дополнительные данные на одном экране, как можно увидеть на нашем последнем примере с альбомной ориентацией.</p>

<p>Давайте подключим поддержку планшетов. Создадим новую папку <b>layout-w600dp</b> и скопируем в него файл из папки <b>layout-land</b>. Идентификатор <b>sw600</b> говорит о минимальной ширине 600dp, что соответствует 7-дюймовым планшетам в альбомной ориентации. Существуют и другие варианты для планшетов с большими размерами.</p>

<p>Тут возникает небольшая проблема - если нам понадобится что-то изменить в разметке для альбомной ориентации, то придётся редактировать файлы во всех папках. Но есть выход из этой ситуации - использование псевдонимов.</p>

<p>Мы можем создать одну копию разметки и указать, чтобы её использовали все нужные размеры устройств.</p>

<p>Делаем следующее. В папке <b>layout-land</b> переименовываем файл <b>activity_main.xml</b> в <b>activity_main_wide.xml</b> и перемещаем файл в папку <b>layout</b>. Пустую папку <b>layout-land</b> можно удалить.</p>

<p>Теперь создайте новую папку <b>res/values-land</b>. В созданной папке создаём новый файл <b>refs.xml</b> (имя не имеет значения, но так принято).</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;resources&gt;

    &lt;item name=&quot;activity_main&quot; type=&quot;layout&quot;&gt;@layout/activity_main_wide
&lt;/item&gt;

&lt;/resources&gt;
</code></pre>

<p>Этот файл говорит, что в альбомной ориентации вместо ресурса <b>activity_main</b> следует подключать ресурс <b>layout/activity_main_wide</b>. Можете запустить приложение и убедиться, что ничего не изменилось.</p>

<p>В вашем проекте скорее всего уже есть папки <b>values_sw600dp</b>, <b>values_720dp_land</b> и др. Скопируйте файл <b>refs.xml</b> в эти папки. Тем самым вы добавили поддержку альбомной ориентации для разных размеров планшетов.</p>

<p>Теперь вы можете вносить изменения в одном файле <b>activity_main_wide.xml</b>, а не по отдельности в каждом файле.</p>

<p>Теперь поговорим о важном моменте. Вы можете установить связь между двумя фрагментами напрямую, чтобы при нажатии кнопки в первом фрагменте менялось содержимое во втором фрагменте. Но это неправильный подход, так как теряется смысл модульности фрагментов. Фрагменты ничего не должны знать о существовании друг друга. Любой фрагмент существует только в активности и только активность через свой специальный менеджер фрагментов должен управлять ими. А сами фрагменты должны реализовать необходимые интерфейсы, которая активность будет использовать в своих целях.</p>

<p>Открываем код первого фрагмента <b>Fragment1</b> и объявляем интерфейс:</p>

<pre><code class="java">
public interface OnSelectedButtonListener {
	void onButtonSelected(int buttonIndex);
}
</code></pre>

<p>Напишем обработчик нажатий кнопок:</p>

<pre><code class="java">
public class Fragment1 extends Fragment implements OnClickListener {
    ...
    
    @Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		
	}
}
</code></pre>

<p>Подключаем кнопки. Код будет похож на код, который мы обычно используем в методе <b>onCreate()</b> у активности, только метод <b>findViewById()</b> будет относиться уже не классу <b>Activity</b> (обычно, мы опускали это), а к корневому элементу разметки фрагмента, в нашем случае <b>viewHierarchy</b>.</p>

<pre><code class="java">
@Override
public View onCreateView(LayoutInflater inflater, ViewGroup container,
		Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	// return super.onCreateView(inflater, container, savedInstanceState);

	View viewHierarchy = inflater.inflate(R.layout.fragment1, container,
			false);
	
	Button button1 = (Button) viewHierarchy.findViewById(R.id.button1);
	Button button2 = (Button) viewHierarchy.findViewById(R.id.button2);
	Button button3 = (Button) viewHierarchy.findViewById(R.id.button3);
	
	button1.setOnClickListener(this);
	button2.setOnClickListener(this);
	button3.setOnClickListener(this);
	
	return viewHierarchy;
}
</code></pre>

<p>Далее надо написать код, который бы получал информацию о нажатой кнопке, чтобы активность могла использовать эту информацию и использовать её для управления вторым фрагментом. Для удобства создадим отдельный метод:</p>

<pre><code class="java">
int translateIdToIndex(int id) {
	int index = -1;
	switch (id) {
	case R.id.button1:
		index = 1;
		break;
	case R.id.button2:
		index = 2;
		break;
	case R.id.button3:
		index = 3;
		break;
	}
	return index;
}
</code></pre>

<p>Каждой кнопке соответствует свой индекс от 1 до 3.</p>

<p>Фрагмент всегда может узнать, в какой активности он находится через метод <b>getActivity()</b>. В методе <b>onClick()</b> мы можем получить доступ к слушателю активности. Так как мы ещё не прописали слушатель у активности, то добавим ещё код для вызова всплывающего сообщения для проверки. А код доступа к слушателю можете закомментировать, чтобы не вызвать ошибку.</p>

<pre><code class="java">
@Override
public void onClick(View v) {
	// TODO Auto-generated method stub
	int buttonIndex = translateIdToIndex(v.getId());

	// Закоментируйте перед проверкой
	OnSelectedButtonListener listener = (OnSelectedButtonListener) getActivity();
	listener.onButtonSelected(buttonIndex);

	// Вспомогательный метод для получения индекса нажатой кнопки
	Toast.makeText(getActivity(), String.valueOf(buttonIndex),
			Toast.LENGTH_SHORT).show();
}
</code></pre>

<p>Запустив приложение, вы можете нажимать на кнопки и видеть индекс нажатой кнопки в всплывающем сообщении. Этот индекс мы будем передавать активности, чтобы она сама решала, что с ним делать.</p>

<p>По сути, мы закончили писать код для первого фрагмента, сделав все необходимые действия. Перейдём ко второму фрагменту. По такому же принципу объявим ссылки на компоненты, которые есть в разметке второго фрагмента. А также загрузим массив строк из ресурсов, который будем использовать для описания котов.</p>

<pre><code class="java">
@Override
public View onCreateView(LayoutInflater inflater, ViewGroup container,
		Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	// return super.onCreateView(inflater, container, savedInstanceState);

	View viewHierarchy = inflater.inflate(R.layout.fragment2, container,
			false);
	
	tvInfo = (TextView)viewHierarchy.findViewById(R.id.textView1);
	ivCat = (ImageView)viewHierarchy.findViewById(R.id.imageView1);
	
	// загружаем массив из ресурсов
	mCatDescriptions = getResources().getStringArray(R.array.cats);
	
	return viewHierarchy;
}
</code></pre>

<p>Массив, заданный в ресурсах (strings.xml). Так как первый элемент массива идёт под индексом 0, то добавим нейтральный текст:</p>

<pre><code class="xml">
&lt;string-array name=&quot;cats&quot;&gt;
    &lt;item&gt;Просто кот&lt;/item&gt;
    &lt;item&gt;Рыжик - рыжий кот&lt;/item&gt;
    &lt;item&gt;Барсик болеет за Барселону&lt;/item&gt;
    &lt;item&gt;Мурзик выписывает Мурзилку&lt;/item&gt;
&lt;/string-array&gt;
</code></pre>

<p>Подготовим метод, который будет менять содержимое фрагмента в зависимости от индекса нажатой кнопки:</p>

<pre><code class="java">
public void setDescription(int buttonIndex) {
	String catDescription = mCatDescriptions[buttonIndex];
	tvInfo.setText(catDescription);
	
	switch (buttonIndex) {
	case 1:
		ivCat.setImageResource(R.drawable.cat_yellow);
		break;
	case 2:
		ivCat.setImageResource(R.drawable.cat_white);
		break;
	case 3:
		ivCat.setImageResource(R.drawable.cat_green);
		break;

	default:
		break;
	}
}
</code></pre>

<p>Код для второго фрагмента тоже готов. Теперь надо передать управление активности, которая будет получать от первого фрагмента индекс нажатой кнопки и передавать его второму фрагменту.</p>

<p>Активность получает доступ к своим фрагментам через специальный менеджер фрагментов (коты называют его манагером), используя метод <b>FragmentManager.findFragmentById()</b>.</p>

<p>Открываем код для активности. Если помните, то в первом фрагменты мы создали интерфейс <b>OnSelectedButtonListener</b>, который мы должны реализовать.</p>

<pre><code class="java">
public class MainActivity extends Activity implements OnSelectedButtonListener { ...
</code></pre>

<p>Среда разработки поможет создать заготовку для необходимого метода:</p>

<pre><code class="java">
@Override
public void onButtonSelected(int buttonIndex) {
	// TODO Auto-generated method stub
	
}
</code></pre>

<p>В этой заготовке вызываем менеджер фрагментов, получаем ссылку на второй фрагмент через его идентификатор и вызываем его метод <b>setDescription()</b>.</p>

<pre><code class="java">
@Override
public void onButtonSelected(int buttonIndex) {
	// TODO Auto-generated method stub
	// подключаем FragmentManager
	FragmentManager fragmentManager = getFragmentManager();

	// Получаем ссылку на второй фрагмент по ID
	Fragment2 fragment2 = (Fragment2) fragmentManager
			.findFragmentById(R.id.fragment2);

	// Выводим нужную информацию
	if (fragment2 != null)
		fragment2.setDescription(buttonIndex);
}
</code></pre>

<p>Итак, если посмотреть на код двух фрагментов, то увидим, что они полностью независимы и не обращаются ни конкретно к друг другу, ни к определённой активности. Принцип модульности соблюдён. Вы можете добавить любой из этих фрагментов в любую новую активность и при этом вам не придётся менять код в самих фрагментах. Весь необходимый функционал в фрагментах уже прописан.</p>

<p>Запустите проект и проверьте на работоспособность. Для данного случая мы пока не получили никаких преимуществ в использовании фрагментов. Но сейчас главное для вас - понять основные принципы создания и взаимодействия фрагментов.</p>

<p><img src="images/fragment9.png"></p>

<p>А теперь представим, что котов много (котов много не бывает), и нам придётся добавлять кнопки на экран. И тогда совсем не останется места картинке и сопроводительному тексту в портретной ориентации. Для решения этой задачи можно кнопки оставить на первой активности, а картинку с текстом перенести на вторую активность. Для альбомной ориентации можно оставить как было.</p>

<p>Создадим вторую активность <b>SecondActivity</b> через мастер создания активностей. Скопируем в его разметку вторую нижнюю часть из разметки от первой активности (activity_second.xml):</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/LinearLayout1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_horizontal&quot;
    android:orientation=&quot;vertical&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;fragment
        android:id=&quot;@+id/fragment2&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment2&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;0dp&quot;
        android:layout_weight=&quot;1&quot;
        tools:layout=&quot;@layout/fragment2&quot; /&gt;


&lt;/LinearLayout&gt;
</code></pre>

<p>А в файле <b>activity_main.xml</b>, наоборот, удалим второй фрагмент, чтобы остался только первый фрагмент с кнопками.</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/LinearLayout1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_horizontal&quot;
    android:orientation=&quot;vertical&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;fragment
        android:id=&quot;@+id/fragment1&quot;
        android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;0dp&quot;
        android:layout_weight=&quot;1&quot;
        tools:layout=&quot;@layout/fragment1&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Если запустить приложение, то столкнёмся с такой ситуацией. У нас запустится активность с кнопками. Повернём устройство в альбомную ориентацию и увидим знакомый интерфейс, когда слева располагаются кнопки, а справа - картинка и текст. Мы знаем, что на экране сейчас два фрагмента и нажатия на кнопки по-прежнему работают.</p>

<p>Повернём устройство обратно в портретную ориентацию и попробуем нажать на любую кнопку. Программа аварийно закроется. Что произошло? А произошло следующее. На экране первой активности в портретном режиме у нас теперь один фрагмент, а вот код об этом не знает и пытается обратиться к фрагменту, которого не существует для него. Ведь разметка поменялась.</p>

<p>Иными словами, нам нужно отслеживать ориентацию или размеры устройства и выбирать, какой код использовать - с участием фрагментов или запускать вторую активность.</p>

<p>Прежде чем решать эту задачу, добавим код во вторую активность.</p>

<pre><code class="java">
@Override
protected void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.activity_second);

	// Получим индекс из намерения активности
	Intent intent = getIntent();
	int buttonIndex = intent.getIntExtra("buttonIndex", -1);
	if (buttonIndex != -1) {
		FragmentManager fm = getFragmentManager();
		Fragment2 fragment2 = (Fragment2) fm
				.findFragmentById(R.id.fragment2);
		fragment2.setDescription(buttonIndex);
	}
}
</code></pre>

<p>Мы знаем, что на другую активность можно перейти через намерение и передавать данные через метод <b>putExtra()</b>. А вторая активность, соответственно, может запуститься и получить данные от первой активности через принимающий метод <b>getIntExtra()</b>.</p>

<p>Вторую активность интересует только индекс нажатой кнопки. Получив его, мы вызываем менеджер фрагментов, находим по идентификатору сам фрагмент <b>Fragment2</b> и вызываем его метод <b>setDescription()</b>, передав ему индекс. Как видите, мы по-прежнему, не вносим изменений в код для фрагмента, всё делается на уровне активностей.</p>

<p>Перейдём к первой активности. Тут придётся попотеть.</p>

<p>Когда устройство находится в альбомной ориентации, то всё нормально. В активности присутствуют два фрагмента из разметки <b>res/layout/activity_main_wide.xml</b> и код соответствует этому состоянию.</p>

<p>Таким образом нам надо отслеживать ситуацию и поправить код в методе <b>onButtonSelected()</b>.</p>

<pre><code class="java">
@Override
public void onButtonSelected(int buttonIndex) {
	// TODO Auto-generated method stub
	// подключаем FragmentManager
	FragmentManager fragmentManager = getFragmentManager();

	// Получаем ссылку на второй фрагмент по ID
	Fragment2 fragment2 = (Fragment2) fragmentManager
			.findFragmentById(R.id.fragment2);

	// если фрагмента не существует или он невидим
	if (fragment2 == null || !fragment2.isVisible()) {
		// запускаем активность
		Intent intent = new Intent(this, SecondActivity.class);
		intent.putExtra("buttonIndex", buttonIndex);
		startActivity(intent);

	} else {
		fragment2.setDescription(buttonIndex);
	}
}
</code></pre>

<p>А отслеживать мы будем через условие <b>if</b>. Если фрагмента не существует или он невидим, то запускаем вторую активность. В противном случае фрагмент присутствует в активности и тогда работаем по старому сценарию.</p>

<p>Запустив код, вы теперь можете нажимать на кнопки в любой ориентации. Программа в состоянии определить, какой код следует выполнять - запускать новую активность или работать в одной активности с двумя фрагментами.</p>

<p><img src="images/fragment10.png"> <img src="images/fragment11.png"></p>

<p><img src="images/fragment12.png"></p>

<p>Остался один штрих. Если в портретной ориентации перейти на вторую активность и повернуть устройство в альбомную ориентацию, то увидим не тот результат, на который рассчитывали. Мы ожидаем увидеть двухпанельный режим. Для этого добавим в метод <b>onCreate()</b> проверку текущего состояния ориентации. Если обнаружим, что находимся в альбомной ориентации, то просто выходим из активности. Конечно, можно дополнительно запоминать, какая кнопка была нажата, чтобы при возврате на первую активность вывести соответствующие картинки, но это уже детали.</p>

<pre><code class="java">
...
setContentView(R.layout.activity_second);

if (getResources().getConfiguration().orientation == Configuration.ORIENTATION_LANDSCAPE) {
    finish();
    return;
}

...
</code></pre>

<p>Для новичков тема с фрагментами может показаться сложной из-за обилия кода с применением интерфейсов и всякой ерунды. Тем более, что мы рассмотрели только часть возможностей фрагментов. Но деваться некуда, другой альтернативы нет.</p>

<p>На последнем рисунке видно, что не все кнопки поместились на экран. Можно было добавить контейнер <b>ScrollView</b> для решения проблемы. Но в большинстве случаев используют специальный фрагмент <b>ListFragment</b>. Если помните, когда на экране имеется только один компонент <b>ListView</b>, то можно использовать готовую активность <b>ListActivity</b>. Аналогично, если фрагмент состоит только из <b>ListView</b>, то нужно использовать <b>ListFragment</b>.</p>

<h2 class="text-warning">Динамическое управление фрагментами</h2>

<p>Мы использовали теги <b>fragment</b> в разметке для размещения фрагментов. Но существует ещё альтернативный вариант, когда фрагмент вставляется в какой-нибудь контейнер динамически. В качестве контейнера часто используют <b>LinearLayout</b> или <b>FrameLayout</b>. Давайте попробуем изменить свою программу под новый способ.</p>

<p>В разметке <b>activity_main.xml</b> удалим тег <b>fragment</b>, а корневому компоненту присвоим идентификатор (вообще-то в нашем примере у нас уже был идентификатор <b>@+id/LinearLayout1</b>, но я решил его заменить на более говорящий).</p>

<pre><code class="xml">
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:id=&quot;@+id/conteiner&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:gravity=&quot;center_horizontal&quot;
    android:orientation=&quot;vertical&quot;
    android:paddingBottom=&quot;@dimen/activity_vertical_margin&quot;
    android:paddingLeft=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingRight=&quot;@dimen/activity_horizontal_margin&quot;
    android:paddingTop=&quot;@dimen/activity_vertical_margin&quot;
    tools:context=&quot;.MainActivity&quot; &gt;

    &lt;!-- &lt;fragment --&gt;
    &lt;!-- android:id=&quot;@+id/fragment1&quot; --&gt;
    &lt;!-- android:name=&quot;ru.alexanderklimov.fragmentdemo.Fragment1&quot; --&gt;
    &lt;!-- android:layout_width=&quot;match_parent&quot; --&gt;
    &lt;!-- android:layout_height=&quot;0dp&quot; --&gt;
    &lt;!-- android:layout_weight=&quot;1&quot; --&gt;
    &lt;!-- tools:layout=&quot;@layout/fragment1&quot; /&gt; --&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Еще раз обращаю внимание, что заменить статический фрагмент программно нельзя. Если вы используете в разметке компонент <b>fragment</b>, то это уже навсегда.</p>

<p>А у нас сложилась странная ситуация, мы удалили фрагмент из разметки и на что-то рассчитываем? Наивные.</p>

<p>На самом деле, всё не так безнадёжно. Сам класс фрагмента <b>Fragment1</b> у нас остался и его по-прежнему можно использовать.</p>

<p>Добавим в класс <b>MainActivity</b> новую переменную:</p>

<pre><code class="java">
boolean mIsDynamic;
</code></pre>

<p>Далее в методе <b>onCreate()</b> устроим небольшую проверку для второго фрагмента. Если он не существует (<i>null</i>) или не является частью разметки (<i>isInLayout</i>), то переменная <b>mIsDynamic</b> будет иметь значение <i>true</i>.</p>

<pre><code class="java">
@Override
protected void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.activity_main);

	FragmentManager fragmentManager = getFragmentManager();
	Fragment2 fragment2 = (Fragment2) fragmentManager
			.findFragmentById(R.id.fragment2);
	mIsDynamic = fragment2 == null || !fragment2.isInLayout();
	Toast.makeText(this, mIsDynamic + "", Toast.LENGTH_SHORT).show();
}
</code></pre>

<p>Я специально добавил в код вызов всплывающего сообщения, что вы увидели, как меняется значение переменной <b>mIsDynamic</b>. При запуске в портретном режиме вы увидите пустой экран, так как удалили из разметки фрагмент, а переменная будет равна <i>true</i>. При повороте в альбомный режим загрузится альтернативная разметка с двумя фрагментами, которую мы не трогали. А булева переменная примет значение <i>false</i>.</p>

<p>Теперь, когда мы знаем, что при старте второй фрагмент не используется, загрузим программно первый фрагмент в том же методе <b>onCreate()</b>.</p>

<pre><code class="java">
// Зная, что второго фрагмента нет, загружаем первый
if (mIsDynamic) {
	// начинаем транзакцию
	FragmentTransaction ft = fragmentManager.beginTransaction();
	// Создаем и добавляем первый фрагмент
	Fragment1 fragment1 = new Fragment1();
	ft.add(R.id.conteiner, fragment1, "fragment1");
	// Подтверждаем операцию
	ft.commit();
}
</code></pre>

<p>В методе <b>add()</b> мы указываем идентификатор контейнера, в который нужно загрузить наш фрагмент. Запустите пример, чтобы увидеть, что приложение работает как и раньше.</p>

<p>Для несложного примера этого вполне достаточно, но иногда требуется более сложное взаимодействие между фрагментами. Поэтому продолжим эксперименты.</p>

<p>Перепишем метод <b>onButtonSelected()</b> с использованием переменной <b>mIsDynamic</b>:</p>

<pre><code class="java">
@Override
public void onButtonSelected(int buttonIndex) {
	// TODO Auto-generated method stub

	// подключаем FragmentManager
	FragmentManager fragmentManager = getFragmentManager();
	Fragment2 fragment2;

	// Если фрагмент недоступен
	if (mIsDynamic) {
		// Динамическое переключение на другой фрагмент (позже)
	} else {
		// Если фрагмент доступен
		fragment2 = (Fragment2) fragmentManager
				.findFragmentById(R.id.fragment2);
		fragment2.setDescription(buttonIndex);
	}
}
</code></pre>

<p>Для альбомного режима всё осталось без изменений. Если второй фрагмент доступен, то выводим данные в соответствии с нажатой кнопкой.</p>

<p>С портретной ориентации ситуация интереснее. Мы можем не запускать новую активность, которая содержит второй фрагмент, а динамический заменить первый фрагмент на второй. Удобно! Нам не нужна лишняя активность. Напишем код для условия <b>if</b> из предыдущего примера.</p>

<pre><code class="java">
if (mIsDynamic) {
	// Динамическое переключение на другой фрагмент
	FragmentTransaction ft = fragmentManager.beginTransaction();
	fragment2 = new Fragment2();
	ft.replace(R.id.conteiner, fragment2, "fragment2");
	ft.addToBackStack(null);
	ft.setCustomAnimations(
	android.R.animator.fade_in, android.R.animator.fade_out);
	ft.commit();
}    
</code></pre>

<p>Запускаем проект и проверяем. Действительно, вместо первого фрагмента появляется второй. Правда при этом никак не учитывается нажатая кнопка. Непорядок.</p>

<p>А происходит это потому, что транзакция вызывается чуть раньше, чем методы фрагмента <b>onCreate()</b> и <b>onCreateView()</b>. Мы пойдём другим путём. У фрагментов есть методы <b>getArguments/setArguments()</b>, способные передавать и принимать данные.</p>

<p>Объявим переменные в классе <b>Fragment2</b>:</p>

<pre><code class="java">
// Имя для аргумента
public static final String BUTTON_INDEX = "button_index";
// Значение по умолчанию
private static final int BUTTON_INDEX_DEFAULT = -1;
</code></pre>

<p>Переделаем в этом же классе метод <b>onCreateView()</b> с применением аргументов.</p>

<pre><code class="java">
@Override
public View onCreateView(LayoutInflater inflater, ViewGroup container,
		Bundle savedInstanceState) {
	// TODO Auto-generated method stub
	// return super.onCreateView(inflater, container, savedInstanceState);

	View viewHierarchy = inflater.inflate(R.layout.fragment2, container,
			false);

	tvInfo = (TextView) viewHierarchy.findViewById(R.id.textView1);
	ivCat = (ImageView) viewHierarchy.findViewById(R.id.imageView1);

	// загружаем массив из ресурсов
	mCatDescriptions = getResources().getStringArray(R.array.cats);

	// Получим индекс, если имеется
	Bundle args = getArguments();
	int buttonIndex = args != null ? args.getInt(BUTTON_INDEX,
			BUTTON_INDEX_DEFAULT) : BUTTON_INDEX_DEFAULT;
	// Если индекс обнаружен, то используем его
	if (buttonIndex != BUTTON_INDEX_DEFAULT)
		setDescription(buttonIndex);

	return viewHierarchy;
}
</code></pre>

<p>Если в фрагмент поступят данные, то обрабатываем их и выводим нужную информацию. Осталось только подготовить эти данные. Сделаем это в методе активности <b>onButtonSelected()</b></p>

<pre><code class="java">
@Override
public void onButtonSelected(int buttonIndex) {
	// TODO Auto-generated method stub

	// подключаем FragmentManager
	FragmentManager fragmentManager = getFragmentManager();
	Fragment2 fragment2;

	// Если фрагмент недоступен
	if (mIsDynamic) {
		// Динамическое переключение на другой фрагмент
		FragmentTransaction ft = fragmentManager.beginTransaction();
		fragment2 = new Fragment2();
		
		// Подготавливаем аргументы
		Bundle args = new Bundle();
		args.putInt(Fragment2.BUTTON_INDEX, buttonIndex);
		fragment2.setArguments(args);
		
		ft.replace(R.id.conteiner, fragment2, "fragment2");
		ft.addToBackStack(null);
		ft.setCustomAnimations(
		android.R.animator.fade_in, android.R.animator.fade_out);
		ft.commit();
	} else {
		// Если фрагмент доступен
		fragment2 = (Fragment2) fragmentManager
				.findFragmentById(R.id.fragment2);
		fragment2.setDescription(buttonIndex);
	}
}
</code></pre>

<p>Это был заключительный аккорд. Мы переделали приложение, полностью отказавшись от второй активности, так как все фрагменты загружаются в один и тот же контейнер.</p> 

<p>Дополнительные материалы по фрагментам есть в <a href="theory/fragments.html">отдельном цикле статей</a>.</p>


<h2 class="text-warning">Дополнительное чтение</h2>

<p><a href="http://developer.android.com/intl/ru/tools/projects/templates.html" >Using Code Templates</a> - описание других шаблонов</p>

<h5 class="text-error">Реклама</h5>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4224968932772057";
/* Полноразмерный баннер 728х90 */
google_ad_slot = "4077523505";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="../../pagead2.googlesyndication.com/pagead/f.txt">
</script>

</div><!--/span-->
        </div><!--/row-->	
		  
        </div><!--/span-->
		
		<div class="span2">
            <div class="well sidebar-nav">
    <h4><span class="label label-info">Реклама</span></h4>
    <script type="text/javascript"><!--
    google_ad_client = "pub-4224968932772057";
    /* 120x600AlexKlimov */
    google_ad_slot = "0305552138";
    google_ad_width = 120;
    google_ad_height = 600;
    //-->
    </script>
    <script type="text/javascript"
    src="../../pagead2.googlesyndication.com/pagead/f.txt">
    </script>
</div><!--/.well -->        </div><!--/span-->
		
      </div><!--/row-->
	  
	
      <hr>
	  
	  	  <div class="row-fluid">
	  <div class="span12">
	  <img src="../images/cat_bottom.png" align="right" />
</div><!--/span-->
        </div><!--/row-->

<footer>
    <noindex>
    <span style="float:left; margin:3px 1px 1px 2px;">
	    © 2014 <a href="mailto:rusproject@mail.ru">А.Климов</a>
		
		<!-- Place this code where you want the badge to render. -->
<a href="http://plus.google.com/109061106977829925124?prsrc=3" rel="publisher" style="text-decoration:none;">
<img src="../../ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/></a>

    </span>
	
		<span style="float: right; margin:3px 5px 1px 1px; font-size:22px;">
        <!--Rating@Mail.ru LOGO--><a target=_top
        href="http://top.mail.ru/jump?from=228158"><img
        SRC="http://top-fwz1.mail.ru/counter?id=228158;t=223;l=1"
        border=0 height=31 width=88
        alt="Рейтинг@Mail.ru"/></a><!--/LOGO-->
	</span>
    
    <span style="float: right; margin:2px 70px 1px 1px; font-size:22px;">
        <a href="http://feeds.feedburner.com/alexanderklimov/VJcl"><img src="../../feeds.feedburner.com/_fc/alexanderklimov/VJcle080.gif?bg=0099CC&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a>
	</span>
	
<div style="float: right; margin:2px 70px 1px 1px;">
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="small" data-annotation="inline" data-width="300" data-align="right" ></div>

</div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'ru'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../../apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	

    </noindex>
</footer>

</div><!--/.fluid-container-->    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../../code.jquery.com/jquery-1.7.min.js"></script>
</body>

<!-- Mirrored from developer.alexanderklimov.ru/android/fragment.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:19:11 GMT -->
</html>