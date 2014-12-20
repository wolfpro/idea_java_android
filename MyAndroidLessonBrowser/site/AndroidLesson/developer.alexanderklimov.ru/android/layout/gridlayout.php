<!DOCTYPE html>
<html>

<!-- Mirrored from developer.alexanderklimov.ru/android/layout/gridlayout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:20:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset=utf-8>
<title>Android: GridLayout</title>
   
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
<h1 class="text-warning">GridLayout</h1>

<p>
<a href="#digitalkey">Цифровая клавиатура</a><br>
<a href="#gridgallery">Галерея на GridLayout</a><br>
</p>

<p>В Android 4.0 появился новый вид макета под именем <b>GridLayout</b>. На первый взгляд он может показаться похожим на TableLayout. Но на самом деле он гораздо удобнее и функциональнее. И очень рекомендуется изучить и использовать его в своих новых проектах, которые разрабатываются под новую платформу.</p>

<p>Разметка относится к классу <b>android.widget.GridLayout</b> и имеет колонки, ряды, клетки как в TableLayout, но при этом элементы могут гибко настраиваться.</p>

<p>Когда вы используете данный компонент, то на панели сверху появляются дополнительные кнопки для управления GridLayout.</p>

<p><img src="gridlayout6.png" alt="GridLayout"></p>

<p>В GridLayout для любого компонента можно указать строку и колонку, и в этом месте таблицы он будет размещён. Указывать элемент для каждой ячейки не понадобится, это нужно делать только для тех ячеек, где действительно должны быть компоненты. Компоненты могут растягиваться на несколько ячеек таблицы. Более того, в одну ячейку можно поместить несколько компонентов.</p>

<p>В данной разметке нельзя использовать атрибут веса, поскольку он не сработает в дочерних представлениях GridLayout. Используйте атрибут <b>layout_gravity</b>.</p>

<p>Обратите внимание на атрибуты <b>layout_column</b> и <b>layout_columnSpan</b>, используемые для указания самой левой колонки и количества занимаемых компонентом колонок. Также доступны атрибуты <b>layout_row</b> и <b>layout_rowSpan</b>.</p>

<p>Для дочерних элементов не нужно указывать атрибуты <b>layout_height</b> и <b>layout_width</b>, по умолчанию они устанавливаются в значение <b>wrap_content</b>.</p>

<h2 class="text-warning" id="digitalkey">Цифровая клавиатура</h2>

<p>Для демонстрации мы создадим пример цифровой клавиатуры или калькулятора, чтобы понять преимущества нового шаблона.</p>

<p>Итак, мы хотим создать разметку, напоминающую цифровую панель на многих моделях клавиатур для настольного компьютера или обычный калькулятор. Если вы посмотрите на цифровую панель, то увидите, что часть клавиш имеет больший размер и вытянуты в длину или ширину. Подобный дизайн практически невозможно реализовать старыми способами - придётся постоянно использовать вложенные конструкции LinearLayout, TableLayout и др.</p>

<p>Но, теперь у нас есть GridLayout. Во многом его поведение схоже с LinearLayout - у него есть горизонтальная и вертикальная ориентации, которые определяют вывод следующего элемента.</p>

<p>Для цифровой клавиатуры, если начнем с клавиши слеша (/) с позиции 4 колонки, то используя горизонтальную ориентацию, нам не нужно пропускать клетки. Выбирая горизонтальную ориентацию, мы ограничиваем число колонок для автоматического переноса новой клетки на следующий ряд. В нашем примере используется четыре колонки. В каждой клетке макета будет находиться кнопка, отцентрированная относительно клетки. Сама разметка должна занимать весь контент экрана.</p>

<p>Дочерние элементы настраиваются не совсем привычном образом. Нам не нужно явно задавать размеры (ширину и высоту) каждого элемента. Согласно нашему плану мы должны использовать четыре колонки для 16 кнопок. Попробуем...</p>

<p>Вот как будет выглядеть первоначальная XML-разметка для нашей цели:</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;GridLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;wrap_content&quot;
    android:layout_height=&quot;wrap_content&quot;
    android:layout_gravity=&quot;center&quot;
    android:columnCount=&quot;4&quot;
    android:orientation=&quot;horizontal&quot; &gt;
    &lt;Button android:text=&quot;1&quot; /&gt;
    &lt;Button android:text=&quot;2&quot; /&gt;
    &lt;Button android:text=&quot;3&quot; /&gt;
    &lt;Button android:text=&quot;4&quot; /&gt;
    &lt;Button android:text=&quot;5&quot; /&gt;
    &lt;Button android:text=&quot;6&quot; /&gt;
    &lt;Button android:text=&quot;7&quot; /&gt;
    &lt;Button android:text=&quot;8&quot; /&gt;
    &lt;Button android:text=&quot;9&quot; /&gt;
    &lt;Button android:text=&quot;10&quot; /&gt;
    &lt;Button android:text=&quot;11&quot; /&gt;
    &lt;Button android:text=&quot;12&quot; /&gt;
    &lt;Button android:text=&quot;13&quot; /&gt;
    &lt;Button android:text=&quot;14&quot; /&gt;
    &lt;Button android:text=&quot;15&quot; /&gt;
    &lt;Button android:text=&quot;16&quot; /&gt;
</GridLayout>
</code></pre>

<p>А так будет выглядеть форма в графическом дизайнере:</p>

<p><img src="gridlayout1.png" alt="GridLayout"></p>

<p>Поиграйтесь с параметром <b>android:columnCount</b>, чтобы увидеть, как ведёт себя шаблон при разных значениях.</p>

<p>Теперь займёмся более точной настройкой. Например, первая клавиша клавиатуры - символ слеша (/) будет иметь такой же размер, как большинство кнопок, но начинаться с четвёртой колонки. Клавиша (+) идёт после клавиши (9) и занимает три воображаемых ряда. Клавиша (0) должна занять две колонки. Клавиша (=) должна занять три колонки. Внесём требуемые изменения:</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;GridLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;wrap_content&quot;
    android:layout_height=&quot;wrap_content&quot;
    android:layout_gravity=&quot;center&quot;
    android:columnCount=&quot;4&quot;
    android:orientation=&quot;horizontal&quot; &gt;
    
    &lt;Button
        android:layout_column=&quot;3&quot;
        android:text=&quot;/&quot; /&gt;
    &lt;Button android:text=&quot;1&quot; /&gt;
    &lt;Button android:text=&quot;2&quot; /&gt;
    &lt;Button android:text=&quot;3&quot; /&gt;
    &lt;Button android:text=&quot;*&quot; /&gt;
    &lt;Button android:text=&quot;4&quot; /&gt;
    &lt;Button android:text=&quot;5&quot; /&gt;
    &lt;Button android:text=&quot;6&quot; /&gt;
    &lt;Button android:text=&quot;-&quot; /&gt;
    &lt;Button android:text=&quot;7&quot; /&gt;
    &lt;Button android:text=&quot;8&quot; /&gt;
    &lt;Button android:text=&quot;9&quot; /&gt;
    &lt;Button
        android:layout_rowSpan=&quot;3&quot;
        android:text=&quot;+&quot; /&gt;
    &lt;Button
        android:layout_columnSpan=&quot;2&quot;
        android:text=&quot;0&quot; /&gt;
    &lt;Button android:text=&quot;00&quot; /&gt;
    &lt;Button
        android:layout_columnSpan=&quot;3&quot;
        android:text=&quot;=&quot; /&gt;
&lt;/GridLayout&gt;
</code></pre>

<p>Теперь мы видим такую картину:</p>

<p><img src="gridlayout2.png" alt="GridLayout"></p>

<p>Это не совсем то, что нам нужно. Вроде клавиши зарезервировали себе место, но не растянулись до нужных размеров. Исправляем ситуацию. Здесь на помощь нам придёт атрибут <b>layout_gravity</b>. Применим его у клавиш, которые необходимо растянуть:</p>

<pre><code class="xml">
&lt;Button
    android:layout_gravity=&quot;fill&quot;
    android:layout_rowSpan=&quot;3&quot;
    android:text=&quot;+&quot; /&gt;

&lt;Button
    android:layout_gravity=&quot;fill&quot;
    android:layout_columnSpan=&quot;2&quot;
    android:text=&quot;0&quot; /&gt;

&lt;Button
    android:layout_gravity=&quot;fill&quot;
    android:layout_columnSpan=&quot;3&quot;
    android:text=&quot;=&quot; /&gt;
</code></pre>

<p>Финальный результат радует глаз:</p>

<img src="gridlayout3.png" alt="GridLayout">

<p>Как видите, если разобраться, то ничего сложного. Разметка получилась лаконичной и удобной для чтения.</p>

<p>Использованные материалы:</p>

<p><a href="http://mobile.tutsplus.com/tutorials/android/android-user-interface-design-creating-a-numeric-keypad-with-gridlayout/" >Creating a Numeric Keypad with GridLayout</a></p>

<h2 class="text-warning" id="gridgallery">Галерея на GridLayout</h2>

<p>Рассмотрим теперь вариант создания галереи на основе GridLayout.</p>

<p>Создаём новый проект. Также нужно подготовить фотографии для галереи, которые следует поместить в папку <b>res/drawable-hdpi</b>.</p>

<p>Поместим на главном экране приложения макет GridLayout:</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;GridView xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:id=&quot;@+id/grid_view&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;fill_parent&quot;
    android:columnWidth=&quot;90dp&quot;
    android:gravity=&quot;center&quot;
    android:horizontalSpacing=&quot;10dp&quot;
    android:numColumns=&quot;auto_fit&quot;
    android:stretchMode=&quot;columnWidth&quot;
    android:verticalSpacing=&quot;10dp&quot; &gt;

&lt;/GridView&gt;
</code></pre>

<p>Создадим новый класс <b>ImageAdapter.java</b>, наследующий от BaseAdapter, для размещения изображений в сетке GridLayout через собственный адаптер.</p>

<pre><code class="java">
package ru.alexanderklimov.gridlayout;

import android.content.Context;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.GridView;
import android.widget.ImageView;

public class ImageAdapter extends BaseAdapter {

	private Context mContext;

	// Keep all Images in array
	public Integer[] mThumbIds = { R.drawable.photo1, R.drawable.photo2,
			R.drawable.photo3, R.drawable.photo4, R.drawable.photo5,
			R.drawable.photo6, R.drawable.photo7, R.drawable.photo8,
			R.drawable.photo9, R.drawable.photo10, R.drawable.photo11,
			R.drawable.photo12, R.drawable.photo13, R.drawable.photo14,
			R.drawable.photo15 };

	// Constructor
	public ImageAdapter(Context c) {
		mContext = c;
	}

	@Override
	public int getCount() {
		// TODO Auto-generated method stub
		return mThumbIds.length; // длина массива
	}

	@Override
	public Object getItem(int position) {
		// TODO Auto-generated method stub
		return mThumbIds[position];
	}

	@Override
	public long getItemId(int position) {
		// TODO Auto-generated method stub
		return 0;
	}

	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
		ImageView imageView = new ImageView(mContext);
		imageView.setImageResource(mThumbIds[position]);
		imageView.setScaleType(ImageView.ScaleType.CENTER_CROP);
		imageView.setLayoutParams(new GridView.LayoutParams(120, 110));
		return imageView;
	}
}
</code></pre>

<p>Открываем основной класс приложения и связываем через созданный адаптер изображения с GridLayout:</p>

<pre><code class="java">
package ru.alexanderklimov.gridlayout;

import android.app.Activity;
import android.os.Bundle;
import android.widget.GridView;

public class GridLayoutDemoActivity extends Activity {
	/** Called when the activity is first created. */
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);

		GridView gridView = (GridView) findViewById(R.id.grid_view);

		// устанавливаем адаптер через экземпляр класса ImageAdapter
		gridView.setAdapter(new ImageAdapter(this));
	}
}
</code></pre>

<p>Запустим проект и проверим, что всё отображается нормально.</p>

<p><img src="gridlayout4.png" alt="Галерея"></p>

<p>Не обращайте внимания, что картинки на скриншоте повторяются, просто было лень готовить пятнадцать разных фотографий.</p>

<p>На этом урок можно было закончить, но давайте доработаем приложение, чтобы выбранная картинка отображалась в полном размере на весь экран. Для этого нужно передать идентификатор выбранного изображения новой активности. </p>

<p>Создадим в папке <i>layout</i> файл разметки <b>full_image.xml</b> для этой цели.</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;match_parent&quot;
    android:orientation=&quot;vertical&quot; &gt;

    &lt;ImageView
        android:id=&quot;@+id/full_image_view&quot;
        android:layout_width=&quot;fill_parent&quot;
        android:layout_height=&quot;fill_parent&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<p>Создадим новый класс <b>FullImageActivity.java</b> для активности, которая будет отображать картинку на весь экран. Активность через намерение будет получать идентификатор картинки и выводить её на экран.</p>

<pre><code class="java">
package ru.alexanderklimov.gridlayout;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.widget.ImageView;

public class FullImageActivity extends Activity {

	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.full_image);

		// get intent data
		Intent intent = getIntent();

		// Selected image id
		int position = intent.getExtras().getInt("id");
		ImageAdapter imageAdapter = new ImageAdapter(this);

		ImageView imageView = (ImageView) findViewById(R.id.full_image_view);
		imageView.setImageResource(imageAdapter.mThumbIds[position]);
	}
}
</code></pre>

<p>Не забываем прописать новый класс в манифесте проекта.</p>

<p>Возвращаемся к главной активности и добавляем обработчик щелчков на сетке:</p>

<pre><code class="java">
package ru.alexanderklimov.gridlayout;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.GridView;
import android.view.View;

public class GridLayoutDemoActivity extends Activity {
	/** Called when the activity is first created. */
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);

		GridView gridView = (GridView) findViewById(R.id.grid_view);

		// устанавливаем адаптер через экземпляр класса ImageAdapter
		gridView.setAdapter(new ImageAdapter(this));

		gridView.setOnItemClickListener(new OnItemClickListener() {
			@Override
			public void onItemClick(AdapterView&lt;?> parent, View v,
					int position, long id) {

				// посылаем идентификатор картинки в FullScreenActivity
				Intent i = new Intent(getApplicationContext(),
						FullImageActivity.class);
				// передаем индекс массива
				i.putExtra("id", position);
				startActivity(i);
			}
		});
	}
}
</code></pre>

<p>Снова запускаем проект и щёлкаем по любой миниатюре - должен запуститься новый экран с картинкой во весь рост. Теперь можно разглядеть кота получше.</p>

<p><img src="gridlayout4.png" alt="Галерея"> <img src="gridlayout5.png" alt="Галерея"></p>

<h2 class="text-warning">Дополнительное чтение</h2>

<p><a href="http://android-developers.blogspot.com/2011/11/new-layout-widgets-space-and-gridlayout.html" >Android Developers Blog: New Layout Widgets: Space and GridLayout</a></p>

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

<!-- Mirrored from developer.alexanderklimov.ru/android/layout/gridlayout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:20:12 GMT -->
</html>