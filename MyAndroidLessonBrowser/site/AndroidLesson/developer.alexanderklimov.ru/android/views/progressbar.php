<!DOCTYPE html>
<html>

<!-- Mirrored from developer.alexanderklimov.ru/android/views/progressbar.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:16:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset=utf-8>
<title>Android: ProgressBar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le styles -->
<link href="../../assets/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 10px;
  }
  .sidebar-nav {
    padding: 9px 0;
  }
</style>
	
<link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
	
   <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    
<link rel="icon" href="../../favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />   
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
		<a href="http://developer.alexanderklimov.ru/"><img src="../../images/header.png" alt="Сайт разработчика Александр Климова" border="0"/></a>
		</p>
    
    </div><!--/span-->
    
	<div class="span5">
        <p style="color:green; font-style: italic; font-size: small;">
		/* Моя кошка замечательно разбирается в программировании. Стоит мне объяснить проблему ей - и все становится ясно. */<br>John Robbins, Debugging Applications, Microsoft Press, 2000
		</p>
    </div><!--/span-->
    
	<div class="span2">
        <p>
		<a href="http://feeds.feedburner.com/alexanderklimov/VJcl"><img src="../../kot-2-rss-100.png" border="0"></a>
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
<li class=""><a href="../index-2.html">Главная</a></li>
<li class=""><a href="../theory/index.html">Теория</a></li>
<li class="active"><a href="../views.html">Palette</a></li>
<li class=""><a href="../listview/index.html">ListView</a></li>
<li class=""><a href="../catshop/catshop.html">Котошоп</a></li>
<li class=""><a href="../animation.html">Анимация</a></li>
<li class=""><a href="../sqlite/index.html">SQLite</a></li>
<li class=""><a href="../opengles/index.html">OpenGL ES</a></li>
<li class=""><a href="../library/index.html">Библиотеки</a></li>
<li class=""><a href="../games/index.html">Игры</a></li>
<li class=""><a href="../emulator.html">Эмулятор</a></li>
<li class=""><a href="../tips-android.html">Советы</a></li>
<li class=""><a href="../articles-android.html">Статьи</a></li>
<li class=""><a href="../books.html">Книги</a></li>
<li class=""><a href="../java/java.html">Java. Экспресс-курс</a></li>
<li class=""><a href="../design/index.html">Дизайн</a></li>
<li class=""><a href="../opensource.html">Open Source</a></li>
<li class=""><a href="../links.html">Полезные ресурсы</a></li>
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
<h1 class="text-warning">ProgressBar - Индикатор прогресса</h1>

<p>
<a href="#basic">Основы</a><br>
<a href="#thread">Отдельный поток</a><br>
<a href="#vertical">Вертикальный индикатор прогресса</a><br>
<a href="#stylebar">Стилизация</a><br>
<a href="#relative">Индикатор с текстом</a><br>
<a href="#addview">Программное создание индикатора</a><br>
</p>

<h2 class="text-warning" id="basic">Основы</h2>

<p>Элемент управления <b>ProgressBar</b> (Индикатор прогресса) применяется в тех случаях, когда пользователю нужно показать, что программа не зависла, а выполняет продолжительную работу.</p>

<p>Находится в папке <b>Form Widgets</b>.</p>

<p><img src="formwidgets.png" alt="Form Widgets"></p>

<p>Вы увидите, что Android предлагает несколько видов индикатора: ProgressBar (Large), ProgressBar (Normal), ProgressBar (Small) и ProgressBar (Horizontal). Стандартным является второй индикатор Normal, остальные являются модификациями и их отличия заложены в стилях, если посмотреть XML-описание виджетов:</p>

<pre><code class="xml">
style="?android:attr/progressBarStyleLarge"
style="?android:attr/progressBarStyleSmall"
style="?android:attr/progressBarStyleHorizontal"
</code></pre>

<p>Методы для работы с ProgressBar:</p>
<ul>
<li>setProgress() — устанавливает заданное значение индикатора прогресса;</li>
<li>getProgress() — возвращает текущее значение индикатора прогресса;</li>
<li>incrementProgressBy() — устанавливает величину дискретизации приращения значения индикатора; </li>
<li>setMax() — устанавливает максимальное значение величины прогресса.</li>
</ul>

<p>Круговые индикаторы Normal и Large можно просто разместить на экране и они будет бесконечно выводить анимацию вращения без единой строчки кода.</p>

<p>Горизонтальный индикатор обычно используют, чтобы показать индикатор в действии. При длительной операции пользователь видит, что полоска индикатора постоянно увеличивается.</p>

<h2 class="text-warning" id="thread">Отдельный поток</h2>

<p>Выполнение длительных операций предпочтительнее производить в отдельном потоке. Android имеет специальный класс <b>Handler</b> для создания фоновых потоков и их взаимодействия с пользовательским интерфейсом.</p>

<p>Всё, что вам нужно - создать экземпляр класса Handler в классе активности. Поток будет работать с объектом Handler, который в свою очередь, будет обновлять шкалу индикатора в основном потоке активности.</p>

<p>Чтобы послать сообщение в объект Handler, сначала необходимо вызвать метод <b>obtainMessage()</b>, чтобы извлечь объект <b>Message</b> из глобального пула сообщений.</p>

<p>Для вставки сообщения в очередь сообщений объекта Handler существует несколько методов:</p>
<ul>
<li>sendMessage() — помещает сообщение в очередь немедленно (в конец очереди)</li>
<li>sendMessageAtFrontofQueue() — помещает сообщение в очередь немедленно и, кроме того, помещает это сообщение впереди очереди (по умолчанию оно ставится в конец очереди), таким образом ваше сообщение берет приоритет над всеми другими</li>
<li>sendMessageAtTime() — помещает сообщение в очередь в установленное время в миллисекундах</li>
<li>sendMessageDeiayed() — помещает сообщение в очередь после задержки, выраженной в миллисекундах</li>
</ul>

<p>Чтобы обрабатывать эти сообщения, для объекта Handler необходимо реализовать метод обратного вызова handleMessage(), который будет вызываться 
каждым сообщением из очереди сообщения.</p>

<p>Для примера создадим приложение с ProgressBar, который будет отображать ход выполнения длительной задачи (это будет простой цикл с приостановкой 
потока на 1 секунду в каждой итерации цикла) и обновлять степень завершения этой задачи через объект Handler в классе активности.</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;fill_parent&quot;
    android:orientation=&quot;vertical&quot; &gt;

    &lt;ProgressBar
        android:id=&quot;@+id/progressBar1&quot;
        style=&quot;?android:attr/progressBarStyleLarge&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot; /&gt;

    &lt;ProgressBar
        android:id=&quot;@+id/progressBar2&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot; /&gt;

    &lt;ProgressBar
        android:id=&quot;@+id/progressBarHorizontal&quot;
        style=&quot;?android:attr/progressBarStyleHorizontal&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:max=&quot;100&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<pre><code class="java">
package ru.alexanderklimov.progressbar;

import android.app.Activity;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.widget.ProgressBar;

public class ProgressBarDemoActivity extends Activity {
	ProgressBar myProgressBar;
	int myProgress = 0;

	/** Called when the activity is first created. */
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);

		myProgressBar = (ProgressBar) findViewById(R.id.progressBarHorizontal);

		new Thread(myThread).start();
	}

	private Runnable myThread = new Runnable() {
		@Override
		public void run() {
			// TODO Auto-generated method stub
			while (myProgress &lt; 100) {
				try {
					myHandle.sendMessage(myHandle.obtainMessage());
					Thread.sleep(1000);
				} catch (Throwable t) {
				}
			}
		}

		Handler myHandle = new Handler() {
			@Override
			public void handleMessage(Message msg) {
				// TODO Auto-generated method stub
				myProgress++;
				myProgressBar.setProgress(myProgress);
			}
		};
	};
}
</code></pre>

<p><img src="progressbar1.png" alt="ProgressBar"></p>

<h2 class="text-warning" id="vertical">Вертикальный индикатор прогресса</h2>

<p>По умолчанию используется горизонтальный индикатор. Можно создать собственный индикатор с вертикальной ориентацией. В папке <b>res/drawable</b> подготовим два файла:</p>

<h3 class="text-success">verticalprogressbar.xml</h3>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;layer-list xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot; &gt;

    &lt;item android:id=&quot;@android:id/background&quot;&gt;
        &lt;shape&gt;
            &lt;corners android:radius=&quot;5dip&quot; /&gt;

            &lt;solid android:color=&quot;#FFFFFF&quot; /&gt;

            &lt;stroke
                android:width=&quot;1dp&quot;
                android:color=&quot;#FF000000&quot; /&gt;
        &lt;/shape&gt;
    &lt;/item&gt;
    &lt;item android:id=&quot;@android:id/progress&quot;&gt;
        &lt;clip
            android:clipOrientation=&quot;vertical&quot;
            android:gravity=&quot;bottom&quot; &gt;
            &lt;shape&gt;
                &lt;corners android:radius=&quot;5dip&quot; /&gt;

                &lt;solid android:color=&quot;#FFAADD&quot; /&gt;

                &lt;stroke
                    android:width=&quot;1dp&quot;
                    android:color=&quot;#FF000000&quot; /&gt;
            &lt;/shape&gt;
        &lt;/clip&gt;
    &lt;/item&gt;

&lt;/layer-list&gt;
</code></pre>

<h3 class="text-success">verticalprogressbar2.xml</h3>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;layer-list xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot; &gt;

    &lt;item android:id=&quot;@android:id/background&quot;&gt;
        &lt;shape&gt;
            &lt;corners android:radius=&quot;5dip&quot; /&gt;

            &lt;solid android:color=&quot;#FFFFFF&quot; /&gt;

            &lt;stroke
                android:width=&quot;1dp&quot;
                android:color=&quot;#FF000000&quot; /&gt;
        &lt;/shape&gt;
    &lt;/item&gt;
    &lt;item android:id=&quot;@android:id/progress&quot;&gt;
        &lt;clip
            android:clipOrientation=&quot;vertical&quot;
            android:gravity=&quot;bottom&quot; &gt;
            &lt;shape&gt;
                &lt;corners android:radius=&quot;5dip&quot; /&gt;

                &lt;solid android:color=&quot;#00FF55&quot; /&gt;

                &lt;stroke
                    android:width=&quot;1dp&quot;
                    android:color=&quot;#FF000000&quot; /&gt;
            &lt;/shape&gt;
        &lt;/clip&gt;
    &lt;/item&gt;

&lt;/layer-list&gt;	
</code></pre>

<p>Разница между двумя файлами только в цвете, которым закрашивается индикатор во время работы. Я создал второй файл только для демонстрации программного изменения индикатора - когда значение индикатора достигнет отметки 50, то цвет поменяется на зелёный.</p>

<p>Код можно вставить после строчки из предыдущего примера:</p>

<pre><code class="java">
// код из предыдущего примера
Thread.sleep(1000);
// вставим код для изменения цвета
if(myProgress >= 50) myProgressBar.setProgressDrawable(getResources().getDrawable(R.drawable.verticalprogressbar2));
</code></pre>

<p><img src="progressbar2.png" alt="ProgressBar"> <img src="progressbar3.png" alt="ProgressBar"></p>

<h2 class="text-warning" id="stylebar">Стилизация</h2>

<p>Если вам не нравится внешний вид стандартных крутилок, то можете придумать свой. Есть два варианта для реализации этой цели. В первом случае можно подготовить готовый png-файл (spin_custom.png) и поместить его в ресурс, например, в папку <b>res/drawable</b>.</p>

<p><img src="spin_custom.png" alt="Custom Spin"></p>

<p>Затем в этой же папке создаём xml-файл <i>spinner_png.xml</i> с таким содержанием:</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;animated-rotate xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:drawable=&quot;@drawable/spin_custom&quot;
    android:pivotX=&quot;50%&quot;
    android:pivotY=&quot;50%&quot;
    /&gt;
</code></pre>

<p>Теперь в разметке активности можно определять ProgressBar так:</p>

<pre><code class="xml">
&lt;ProgressBar
    android:layout_width=&quot;wrap_content&quot;
    android:layout_height=&quot;wrap_content&quot;
    android:indeterminateDrawable=&quot;@drawable/spinner_png&quot;
    android:indeterminateOnly=&quot;true&quot; /&gt;
</code></pre>

<p>Если запустить проект, то увидим такой индикатор:</p>

<p><img src="spinner_png.gif" alt=""></p>

<p>В реальности индикатор выглядит немного корявым, поддергиваясь на экране. Кроме того, изображение можно улучшить, уменьшив количество цветов и сократив размер файла.</p>

<p>Второй вариант выглядит предпочтительней. На этот раз мы обойдёмся без графических файлов, а будем использовать только XML-размерку. В этой же папке поместим файл <i>spinner_ring.xml</i> следующего содержания:</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;animated-rotate xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:pivotX=&quot;50%&quot;
    android:pivotY=&quot;50%&quot; &gt;

    &lt;shape
        android:innerRadiusRatio=&quot;4&quot;
        android:shape=&quot;ring&quot;
        android:thicknessRatio=&quot;5.333&quot;
        android:useLevel=&quot;false&quot; &gt;
        &lt;size
            android:height=&quot;18dip&quot;
            android:width=&quot;18dip&quot; /&gt;

        &lt;gradient
            android:centerColor=&quot;#886688cc&quot;
            android:centerY=&quot;0.50&quot;
            android:endColor=&quot;#ff6688cc&quot;
            android:startColor=&quot;#006688cc&quot;
            android:type=&quot;sweep&quot;
            android:useLevel=&quot;false&quot; /&gt;
    &lt;/shape&gt;

&lt;/animated-rotate&gt;
</code></pre>

<p>Теперь в разметке активности пропишем строки:</p>

<pre><code class="xml">
&lt;ProgressBar
    android:layout_width=&quot;wrap_content&quot;
    android:layout_height=&quot;wrap_content&quot;
    android:layout_marginLeft=&quot;20dip&quot;
    android:indeterminateDrawable=&quot;@drawable/spinner_ring&quot;
    android:indeterminateOnly=&quot;true&quot; /&gt;
</code></pre>

<p>Получим следующий результат:</p>

<p><img src="spinner_ring.gif" alt=""></p>

<p><a href="http://megadarja.blogspot.com/2011/03/progressbar.html">Источник</a></p>

<p>Ещё несколько вариантов индикаторов можно найти <a href="https://github.com/iklementiev/custom-progressbar">здесь</a>.</p>

<p><img src="../../../beta.hstor.org/storage2/fc4/ea5/9f3/fc4ea59f385a3d6882ef948988240d6b.png"></p>

<noindex>
<p><a href="http://k1im.ru/blog/kastomizaciya-progressbar-v-android">Описание от автора</a>.</p>
</noindex>

<h2 class="text-warning" id="relative">Индикатор с текстом</h2>

<p>К сожалению, индикатор не выводит текст во время работы, что не очень удобно. Можно создать свой <a href="progresstextview.html" >ProgressBar из TextView</a> или создать свой компонент на основе <b>ProgressBar</b>. Другой простой способ - наложить текстовый блок прямо на индикатор, используя <b>RelativeLayout</b>. Пример для пояснения.</p>

<pre><code class="xml">
&lt;RelativeLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    xmlns:tools=&quot;http://schemas.android.com/tools&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;wrap_content&quot; &gt;

    &lt;RelativeLayout
        android:id=&quot;@+id/rl_progress_bar_set&quot;
        android:layout_width=&quot;fill_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_below=&quot;@+id/btn_start&quot;
        android:visibility=&quot;visible&quot; &gt;

        &lt;ProgressBar
            android:id=&quot;@+id/pb_horizontal&quot;
            style=&quot;@android:style/Widget.ProgressBar.Horizontal&quot;
            android:layout_width=&quot;fill_parent&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:layout_alignParentTop=&quot;true&quot;
            android:layout_marginLeft=&quot;10dp&quot;
            android:layout_marginRight=&quot;10dp&quot;
            android:max=&quot;100&quot; /&gt;

        &lt;TextView
            android:id=&quot;@+id/tv_progress_horizontal&quot;
            android:layout_width=&quot;fill_parent&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:layout_alignBottom=&quot;@id/pb_horizontal&quot;
            android:background=&quot;@android:color/transparent&quot;
            android:gravity=&quot;center&quot; /&gt;

        &lt;RelativeLayout
            android:layout_width=&quot;wrap_content&quot;
            android:layout_height=&quot;wrap_content&quot;
            android:layout_alignParentLeft=&quot;true&quot;
            android:layout_below=&quot;@id/pb_horizontal&quot;
            android:layout_marginLeft=&quot;10dp&quot;
            android:layout_marginRight=&quot;10dp&quot;
            android:layout_marginTop=&quot;10dp&quot; &gt;

            &lt;ProgressBar
                style=&quot;@android:style/Widget.ProgressBar.Large&quot;
                android:layout_width=&quot;wrap_content&quot;
                android:layout_height=&quot;wrap_content&quot;
                android:layout_centerInParent=&quot;true&quot;
                android:background=&quot;@android:color/background_dark&quot; /&gt;

            &lt;TextView
                android:id=&quot;@+id/tv_progress_circle&quot;
                android:layout_width=&quot;wrap_content&quot;
                android:layout_height=&quot;wrap_content&quot;
                android:layout_centerInParent=&quot;true&quot;
                android:background=&quot;@android:color/transparent&quot;
                android:gravity=&quot;center&quot;
                android:textColor=&quot;@android:color/white&quot; /&gt;
        &lt;/RelativeLayout&gt;
    &lt;/RelativeLayout&gt;

    &lt;Button
        android:id=&quot;@+id/btn_start&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_alignParentTop=&quot;true&quot;
        android:layout_centerHorizontal=&quot;true&quot;
        android:layout_marginTop=&quot;15dp&quot;
        android:onClick=&quot;onClick&quot;
        android:text=&quot;Поехали&quot;
        android:textSize=&quot;25dp&quot; /&gt;

&lt;/RelativeLayout&gt;
</code></pre>

<p>Код, чтобы увидеть работу индикатора. При каждом щелчке кнопки значение индикаторов увеличиваются на 10 процентов.</p>

<pre><code class="java">
package ru.alexanderklimov.test;

import ...

public class MainActivity extends Activity {

	private int progress = 0;
	private ProgressBar pbHorizontal;
	private TextView tvProgressHorizontal;
	private TextView tvProgressCircle;

	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);

		setContentView(R.layout.activity_main);

		pbHorizontal = (ProgressBar) findViewById(R.id.pb_horizontal);
		tvProgressHorizontal = (TextView) findViewById(R.id.tv_progress_horizontal);
		tvProgressCircle     = (TextView)findViewById(R.id.tv_progress_circle); 
	}

	public void onClick(View v) {
		progress = progress + 10;
		postProgress(progress);
	}

	private void postProgress(int progress) {
		String strProgress = String.valueOf(progress) + " %";
		pbHorizontal.setProgress(progress);
		
		if (progress == 0) {
			pbHorizontal.setSecondaryProgress(0);
		} else {
			pbHorizontal.setSecondaryProgress(progress + 5);
		}
		tvProgressHorizontal.setText(strProgress);
		tvProgressCircle.setText(strProgress);
	}
}
</code></pre>

<p><img src="progressbar4.png" alt="ProgressBar"></p>

<h2 class="text-warning" id="addview">Программное создание индикатора</h2>

<p>Данный способ уже устарел, так как через XML намного удобнее. Для общего развития.</p>

<pre><code class="java">
// Зададим цвета для фона и самого индикатора
Drawable background = new ColorDrawable(0xFF373737);
Drawable progress = new ColorDrawable(0xFF00B51C);
ClipDrawable clipProgress = new ClipDrawable(progress, Gravity.LEFT,
		ClipDrawable.HORIZONTAL);

// Слои для индикатора
LayerDrawable layerlist = new LayerDrawable(new Drawable[] {
		background, clipProgress });
layerlist.setId(0, android.R.id.background);
layerlist.setId(1, android.R.id.progress);

// Создаем новый индикатор с горизонтальным стилем и заданным фоном
ProgressBar progressBar = new ProgressBar(this, null,
		android.R.attr.progressBarStyleHorizontal);
progressBar.setLayoutParams(new LinearLayout.LayoutParams(
		LinearLayout.LayoutParams.MATCH_PARENT,
		LinearLayout.LayoutParams.WRAP_CONTENT));
progressBar.setProgressDrawable(layerlist);
progressBar.setProgress(76);

LinearLayout linearlayout = (LinearLayout) findViewById(R.id.linearlayout);

linearlayout.addView(progressBar);
</code></pre>

<h2 class="text-warning">Дополнительное чтение</h2>

<p><a href="https://github.com/Todd-Davies/ProgressWheel" >Todd-Davies/ProgressWheel</a></p>

<p><a href="https://github.com/passsy/android-HoloCircularProgressBar" >passsy/android-HoloCircularProgressBar</a></p>

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
src="../../../pagead2.googlesyndication.com/pagead/f.txt">
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
    src="../../../pagead2.googlesyndication.com/pagead/f.txt">
    </script>
</div><!--/.well -->        </div><!--/span-->
		
      </div><!--/row-->
	  
	
      <hr>
	  
	  	  <div class="row-fluid">
	  <div class="span12">
	  <img src="../../images/cat_bottom.png" align="right" />
</div><!--/span-->
        </div><!--/row-->

<footer>
    <noindex>
    <span style="float:left; margin:3px 1px 1px 2px;">
	    © 2014 <a href="mailto:rusproject@mail.ru">А.Климов</a>
		
		<!-- Place this code where you want the badge to render. -->
<a href="http://plus.google.com/109061106977829925124?prsrc=3" rel="publisher" style="text-decoration:none;">
<img src="../../../ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/></a>

    </span>
	
		<span style="float: right; margin:3px 5px 1px 1px; font-size:22px;">
        <!--Rating@Mail.ru LOGO--><a target=_top
        href="http://top.mail.ru/jump?from=228158"><img
        SRC="http://top-fwz1.mail.ru/counter?id=228158;t=223;l=1"
        border=0 height=31 width=88
        alt="Рейтинг@Mail.ru"/></a><!--/LOGO-->
	</span>
    
    <span style="float: right; margin:2px 70px 1px 1px; font-size:22px;">
        <a href="http://feeds.feedburner.com/alexanderklimov/VJcl"><img src="../../../feeds.feedburner.com/_fc/alexanderklimov/VJcle080.gif?bg=0099CC&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a>
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
    po.src = '../../../apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	

    </noindex>
</footer>

</div><!--/.fluid-container-->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>
    <script src="../../../code.jquery.com/jquery-1.7.min.js"></script>
</body>

<!-- Mirrored from developer.alexanderklimov.ru/android/views/progressbar.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:16:52 GMT -->
</html>