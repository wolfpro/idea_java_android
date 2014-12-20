<!DOCTYPE html>
<html>

<!-- Mirrored from developer.alexanderklimov.ru/android/views/listview.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:20:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset=utf-8>
<title>Android: ListView</title>

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
<h1 class="text-warning">ListView</h1>

<p>
<a href="#intro">Знакомьтесь - ListView</a><br>
<a href="#listcontent">Адаптеры - заполнение списка контентом</a><br>
<a href="#arraystring">Отступление. Использование ресурсов</a><br>
<a href="#customlayout">Собственная разметка</a><br>
<a href="#dynamiccontent">Динамическое заполнение списка</a><br>
<a href="#listener">Прослушивание событий элемента ListView</a><br>
<a href="#problems">ListView не реагирует на нажатия</a><br>
<a href="#design">Настраиваем внешний вид ListView</a><br>
<a href="#customselector">Пользовательский селектор</a><br>
<a href="#multichoice">Множественный выбор</a><br>
<a href="#underlist">Кнопка под списком</a><br>
<a href="#smoothscroll">Плавная прокрутка в начало списка или любую позицию</a><br>
<a href="#customscroll">Настраиваем прокрутку</a><br>
</p>

<h2 class="text-warning" id="intro">Знакомьтесь - ListView</h2>

<p>Виджет <b>ListView</b> представляет собой прокручиваемый список элементов. Очень популярен на мобильных устройства из-за своего удобства. Даже кот способен пользоваться этим элементом, проводя лапкой по экрану вашего телефона.</p>

<img src="listviewcat.png" alt="Кот работает с сенсорным экраном">

<p>Находится в папке <b>Composite</b>.</p>

<p><img src="composite.png" alt="ListView"></p>

<p>ListView более сложен в применении по сравнению с TextView и другим простыми элементами. Работа со списком состоит из двух частей. Сначала мы добавляем на форму сам ListView, а затем заполняем его элементами списка.</p>

<p>Рассмотрим для начала самый простой пример. Поместите на форму виджет <b>ListView</b>. Вы увидите, что список будет содержать несколько элементов Item и Sub Item.</p>

<p><img src="listview1.png" alt="ListView"></p>

<p>Однако, если посмотрим XML-код, то там ничего не увидим.</p>

<pre><code class="xml">
&lt;ListView
    android:id=&quot;@+id/listView1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;wrap_content&quot; &gt;
&lt;/ListView&gt;
</code></pre>

<p>Переходим в класс активности и пишем в методе onCreate() следующий код:</p>

<pre><code class="java">
// получаем экземпляр элемента ListView
ListView lv = (ListView)findViewById(R.id.listView1);

// определяем массив типа String
final String[] catnames = new String[] {
    "Рыжик", "Барсик", "Мурзик", "Мурка", "Васька",
    "Томасина", "Кристина", "Пушок", "Дымка", "Кузя",
    "Китти", "Масяня", "Симба"		    
  };

// используем адаптер данных
ArrayAdapter&lt;String&gt; adapter = new ArrayAdapter&lt;String&gt;(this,	android.R.layout.simple_list_item_1, catnames);

lv.setAdapter(adapter);
</code></pre>

<p>Вот и всё. Давайте разберёмся с кодом.</p>

<h2 class="text-warning" id="listcontent">Адаптеры - заполнение списка контентом</h2>

<p>Элементу ListView требуется контент для наполнения. Источником наполнения могут быть разные источники: массивы, базы данных. Чтобы связать данные со списком, используется так называемый адаптер.</p>

<p>Адаптер обычно создаётся при помощи конструкции <i>new ArrayAdapter(Context context, int textViewResourceId, String[] objects)</i>.</p>

<ul>
<li><b>context</b> - текущий контекст</li>
<li><b>textViewResourceId</b> - идентификатор ресурса с разметкой для каждой строки. Можно использовать системную разметку с идентификатором <b>android.R.layout.simple_list_item_1</b> или создать собственную разметку</li>
<li><b>objects</b> - массив строк</li>
</ul>

<p>Метод <b>setAdapter(ListAdapter)</b> связывает подготовленный список с адаптером.</p>

<p>Переходим к java-коду. Сначала мы получаем экземпляр элемента ListView в методе onCreate(). Далее мы определяем массив типа String. И, наконец, используем адаптер данных, чтобы сопоставить данные с шаблоном разметки. Выбор адаптера зависит от типа используемых данных. В нашем случае мы использовали класс <b>ArrayAdapter</b>.</p>

<h3 class="text-warning" id="arraystring">Отступление</h3>

<p>Если вы будете брать строки из ресурсов, то код будет таким:</p>

<pre><code class="java">
final String[] catnames = {
    getResources().getString(R.string.name1),
    getResources().getString(R.string.name2),
	getResources().getString(R.string.name3),
	getResources().getString(R.string.name4),
	getResources().getString(R.string.name5),
};
</code></pre>

<p>А будет еще лучше, если вы воспользуетесь специально предназначенным для этого случая типом ресурса <b>&lt;string-array&gt;</b>. В файле <b>res/values/strings.xml</b> добавьте следующее:</p>

<pre><code class="xml">
&lt;string-array name=&quot;cat_names&quot;&gt;
    &lt;item&gt;Рыжик&lt;/item&gt;
    &lt;item&gt;Барсик&lt;/item&gt;
    &lt;item&gt;Мурзик&lt;/item&gt;
    &lt;item&gt;Мурка&lt;/item&gt;
    &lt;item&gt;Васька&lt;/item&gt;
    &lt;item&gt;Томасина&lt;/item&gt;
    &lt;item&gt;Кристина&lt;/item&gt;
    &lt;item&gt;Пушок&lt;/item&gt;
    &lt;item&gt;Дымка&lt;/item&gt;
    &lt;item&gt;Кузя&lt;/item&gt;
    &lt;item&gt;Китти&lt;/item&gt;
    &lt;item&gt;Масяня&lt;/item&gt;
    &lt;item&gt;Симба&lt;/item&gt;
&lt;/string-array&gt;
</code></pre>

<p>И тогда в коде используйте для объявления массива строк:</p>

<pre><code class="java">
String[] catnames = getResources().getStringArray(R.array.cat_names);
</code></pre>

<p>Запустив проект в эмуляторе, вы увидите работающий пример прокручиваемого списка. Правда, созданный список пока не реагирует на нажатия. Но при нажатии выбранный элемент выделяется цветным прямоугольником (в версии Android 2.3 был оранжевый, а в Android 4.0 - синий).</p>

<p><img src="listview2.png" alt="ListView на эмуляторе"></p>

<h2 class="text-warning" id="customlayout">Собственная разметка</h2>

<p>В примере мы используем готовую системную разметку <b>android.R.layout.simple_list_item_1</b>, в которой настроены цвета, фон, высота пунктов и другие параметры. Но нет никаких препятствий самому создать собственную разметку под своё приложение.</p>

<p>Но для начала неплохо бы взглянуть на содержание системной разметки. Существуют различные утилиты и сайты для просмотра исходников Android. Наш <i>simple_list_item_1</i> выглядит так (в одной из версий):</p>

<pre><code class="xml">
&lt;TextView xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot; 
    android:id=&quot;@android:id/text1&quot; 
    style=&quot;?android:attr/listItemFirstLineStyle&quot; 
    android:paddingTop=&quot;2dip&quot; 
    android:paddingBottom=&quot;3dip&quot; 
    android:layout_width=&quot;fill_parent&quot; 
    android:layout_height=&quot;wrap_content&quot; /&gt; 
</code></pre> 

<p>Мы видим, что в качестве разметки используется TextView с набором атрибутов.</p>

<p>Создадим свой шаблон для отдельного пункта списка. Для этого в папке <b>res/layout/</b> создадим новый файл <b>list_item.xml</b>:</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;TextView xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;fill_parent&quot;
    android:padding=&quot;10dp&quot;
    android:textColor=&quot;#00FF00&quot;
    android:textSize=&quot;20sp&quot;
    android:textStyle=&quot;bold&quot; &gt;

&lt;/TextView&gt;
</code></pre>

<p>Вы можете настраивать все атрибуты у TextView, кроме свойства <b>Text</b>, так как текст будет автоматически заполняться элементом ListView программным путём. Ну, а дальше просто меняете в коде системную разметку на свою:</p>

<pre><code class="java">
ArrayAdapter&lt;String&gt; adapt = new ArrayAdapter&lt;String&gt;(this,	R.layout.list_item, catnames);
</code></pre>

<h2 class="text-warning" id="dynamiccontent">Динамическое заполнение списка</h2>

<p>Рассмотрим пример динамического заполнения списка, когда список изначально пуст и пользователь сам добавляет новые элементы. Разместим на экране текстовое поле, в котором пользователь будет вводить известные ему имена котов. Когда пользователь будет нажимать на клавишу Enter на клавиатуре, то введённое имя кота будет попадать в список.</p>

<pre><code class="java">
@Override
public void onCreate(Bundle savedInstanceState) {
	super.onCreate(savedInstanceState);
	setContentView(R.layout.main);

	ListView listView = (ListView) findViewById(R.id.listView);
	final EditText editText = (EditText) findViewById(R.id.editText);

	// Создаём пустой массив для хранения имен котов
	final ArrayList&lt;String&gt; catnames = new ArrayList&lt;String&gt;();

	// Создаём адаптер ArrayAdapter, чтобы привязать массив к ListView
	final ArrayAdapter&lt;String&gt; adapter;
	adapter = new ArrayAdapter&lt;String&gt;(this,
			android.R.layout.simple_list_item_1, catnames);
	// Привяжем массив через адаптер к ListView
	listView.setAdapter(adapter);

	// Прослушиваем нажатия клавиш
	editText.setOnKeyListener(new OnKeyListener() {
		public boolean onKey(View v, int keyCode, KeyEvent event) {
			// TODO Auto-generated method stub
			if (event.getAction() == KeyEvent.ACTION_DOWN)
				if (keyCode == KeyEvent.KEYCODE_ENTER) {
					catnames.add(0, editText.getText().toString());
					adapter.notifyDataSetChanged();
					editText.setText("");
					return true;
				}
			return false;
		}
	});
}
</code></pre>

<p>При нажатии на Enter мы получаем текст из текстового поля и заносим его в массив. А также оповещаем адаптер об изменении, чтобы список автоматически обновил своё содержание.</p>

<p><img src="listview7.png" alt="Динамическое заполнение списка"></p>

<p>У нас получился каркас для чата, когда пользователь вводит текст и он попадает в список. Далее надо получить текст от другого пользователя и также добавить в список. К слову сказать, слово <b>chat</b> с французского означает "кошка". Но это уже совсем другая история.</p>

<h2 class="text-warning" id="listener">Прослушивание событий элемента ListView</h2>

<p>Нам нужно реагировать на определенные события, генерируемые элементом ListView, в частности, нас интересует событие, которое возникает, когда пользователь нажимает на один из пунктов списка.</p>

<p>В этом нам поможет метод <b>setOnItemClickListener</b> элемента ListView и метод <b>OnItemClick()</b> класса <b>AdapterView.OnItemClickListener</b>.</p>

<pre><code class="java">
lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
	@Override
	public void onItemClick(AdapterView&lt;?&gt; parent, View itemClicked, int position,
			long id) {
		Toast.makeText(getApplicationContext(), ((TextView) itemClicked).getText(),
		        Toast.LENGTH_SHORT).show();
	}
});
</code></pre>

<p>Теперь при нажатии на любой элемент списка мы получим всплывающее сообщение, содержащее текст выбранного пункта.</p>

<p>Естественно, мы можем не только выводить сообщения, но и запускать новые активности и т.п.</p>

<pre><code class="java">
lv.setOnItemClickListener(new AdapterView.OnItemClickListener() {
	@Override
	public void onItemClick(AdapterView&lt;?&gt; parent, View itemClicked, int position,
			long id) {
		TextView textView = (TextView) itemClicked;
		String strText = textView.getText().toString(); // получаем текст нажатого элемента
		
		if(strText.equalsIgnoreCase(getResources().getString(R.string.name1))) {
		    // Запускаем активность, связанную с определенным именем кота
			startActivity(new Intent(this, BarsikActivity.class));
		}
	}
});
</code></pre>

<p>В метод <b>onItemClick()</b> передаётся вся необходимая информация, необходимая для определения нажатого пункта в списке. В приведенном выше примере использовался простой способ - приводим выбранный элемент к объекту TextView, так как известно, что все пункты являются элементами TextView (Для дополнительной проверки можете использовать оператор instanceOf). Мы извлекаем текст из выбранного пункта и сравниваем его со своей строкой.</p>

<p>Также можно проверять атрибут <b>id</b> для определения нажатия пункта списка.</p>

<h2 class="text-warning" id="problems">ListView не реагирует на нажатия</h2>

<p>В некоторых случаях нажатия на пунктах меню не срабатывают. Ниже приводятся несколько возможных причин.</p>

<p>Элемент списка содержит CheckBox, который также имеет свой слушатель нажатий. Попробуйте удалить фокус у него:</p>

<pre><code class="xml">
android:focusable="false"
android:focusableInTouchMode="false"
</code></pre>

<p>Попробуйте переместить <b>OnItemClickListener</b> перед установкой Adapter. Иногда помогает :-)</p>

<p>Элемент списка содержит <b>ImageButton</b>. Установите фокус в false:</p>

<pre><code class="java">
ImageButton imgbutton = (ImageButton) convertView.findViewById(R.id.imageButton);
imgbutton.setFocusable(false);
</code></pre>

<p>Элемент списка содержит TextView. Если вы используете атрибут <b>android:inputType="textMultiLine"</b>, то замените его на <b>android:minLines/android:maxLines</b>.</p>

<p>Элемент списка содержит TextView, содержащий ссылку на веб-страницу или электронный адрес. Удалите атрибут <b>android:autoLink</b>.</p>

<h2 class="text-warning" id="design">Настраиваем внешний вид ListView</h2>

<p>У <b>ListView</b> есть несколько полезных атрибутов, позволяющих сделать список более привлекательным. Например, у него есть атрибут <b>divider</b>, который отвечает за внешний вид разделителя, а также атрибут <b>dividerHeight</b>, отвечающий за высоту разделителя. Мы можем установить какой-нибудь цвет или даже картинку для разделителя. Например, создадим для разделителя цветовой ресурс с красным цветом, а также ресурс размера для его высоты:</p>

<pre><code class="xml">
&lt;color name=&quot;reddivider&quot;&gt;#FF0000&lt;/color&gt;
&lt;dimen name=&quot;twodp&quot;&gt;2dp&lt;/dimen&gt;
</code></pre>

<p>Далее присвоим созданный ресурс атрибуту <b>divider</b>, а также зададим его высоту в атрибуте <b>dividerHeight</b> у нашего элемента ListView:</p>

<pre><code class="xml">
&lt;ListView
    android:id=&quot;@+id/listView1&quot;
    android:layout_width=&quot;match_parent&quot;
    android:layout_height=&quot;wrap_content&quot;
    <b>android:divider=&quot;@color/reddivider&quot;
    android:dividerHeight=&quot;@dimen/twodp&quot; &gt;</b>
&lt;/ListView&gt;
</code></pre>

<p><img src="listview3.png" alt="ListView с красным разделителем"></p>

<p>Если вас не устраивает стандартный разделитель, что можете нарисовать какую-нибудь волнистую черту, сохранить ее в PNG-файле и использовать как drawable-ресурс. Проделайте это самостоятельно.</p>

<p>Можно работать с данными атрибутами программно:</p>

<pre><code class="java">
ColorDrawable divcolor = new ColorDrawable(Color.DKGRAY);
listView.setDivider(divcolor);
listView.setDividerHeight(2);
</code></pre>

<p>Если хотите убрать разделители, то используйте прозрачный цвет.</p>

<pre><code class="java">
listView.setDivider(getResources().getDrawable(android.R.color.transparent));
</code></pre>

<p>Заметил, что порядок вызова двух методов важен, если установку высоты вызвать перед установкой цвета разделителя, то метод затирает цвет и результат будет такой же, как с прозрачным цветом.</p>

<p>Обратите внимание, что по умолчанию разделитель не выводится перед первым и последним элементом списка. Если вы хотите изменить эти настройки, то используйте свойства <b>Footer dividers enabled</b> (атрибут <b>footerDividersEnabled</b>) и <b>Header dividers enabled</b> (атрибут <b>headerDividersEnabled</b>):</p>	

<pre><code class="xml">
...
android:footerDividersEnabled="true"
android:headerDividersEnabled="true"
...
</code></pre>

<h2 class="text-warning" id="customselector">Пользовательский селектор</h2>

<p>Мы уже видели, что по умолчанию выбранный элемент списка выделяется при помощи цветной полоски. Данный селектор также можно настроить через атрибут <b>listSelector</b>. Создайте какую-нибудь текстуру для селектора и привяжите его через ресурс. Вот образец текстурированного ореола желтого цвета для селектора, взятого из книги <a href="../books.html">Android за 24 часа. Программирование приложений под операционную систему Google</a>.</p>

<p><img src="listview4.png" alt="ListView с пользовательским селектором"></p>

<p>Если вам нужно сразу подсветить нужный элемент списка при запуске программы, то используйте связку двух методов:</p>

<pre><code class="java">
lv.requestFocusFromTouch();
lv.setSelection(4); // выбираем 5 пункт списка
</code></pre>

<h2 class="text-warning" id="multichoice">Множественный выбор</h2>

<p>ListView позволяет выбирать не только один пункт, но и несколько. В этом случае нужно установить свойство <b>Choice Mode</b> в значение <b>multiplyChoice</b>, что соответствует атрибуту <b>android:choiceMode="multipleChoice"</b>.</p>

<p>Также множественный выбор можно установить программно при помощи метода <b>setChoiceMode(ListView.CHOICE_MODE_MULTIPLE)</b>.</p>

<p>Теперь, если создать массив строк, например список продуктов для кошачьего завтрака, то получим следующий результат.</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;fill_parent&quot;
    android:orientation=&quot;vertical&quot; &gt;

    &lt;TextView
        android:id=&quot;@+id/textView1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:text=&quot;Завтрак для кота&quot; /&gt;

    &lt;ListView
        android:id=&quot;@+id/listView1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:choiceMode=&quot;multipleChoice&quot; &gt;
    &lt;/ListView&gt;

&lt;/LinearLayout&gt;
</code></pre>

<pre><code class="java">
public class MultiChoiceListViewActivity extends Activity {
	ListView choiceList;
	TextView selection;
	String[] foods = { "Молоко", "Сметана", "Колбаска", "Сыр", "Мышка",
			"Ананас", "Икра черная", "Икра кабачковая", "Яйцо" };

	/** Called when the activity is first created. */
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);

		selection = (TextView) findViewById(R.id.textView1);
		choiceList = (ListView) findViewById(R.id.listView1);
		ArrayAdapter&lt;String&gt; adapter = new ArrayAdapter&lt;String&gt;(this,
				android.R.layout.simple_list_item_multiple_choice, foods);
		// choiceList.setChoiceMode(ListView.CHOICE_MODE_MULTIPLE);
		choiceList.setAdapter(adapter);
	}
}
</code></pre>

<p><img src="listview5.png" alt="Множественный выбор"></p>

<p>Осталось только программно получить отмеченные пользователем элементы списка. Вот мой список продуктов, который я хочу предложить коту. Надеюсь, ему понравится мой выбор. Выбранные элементы будем помещать в TextView:</p>

<pre><code class="java">
choiceList.setOnItemClickListener(new OnItemClickListener() {
	@Override
	public void onItemClick(AdapterView&lt;?&gt; parent, View v,
			int position, long id) {
		// TODO Auto-generated method stub
		// Очистим TextView
		selection.setText("");
		// получим булев массив для каждой позиции списка
		// Объект SparseBooleanArray содержит массив значений, к которым можно получить доступ
		// через valueAt(index) и keyAt(index)
		SparseBooleanArray chosen = ((ListView) parent).getCheckedItemPositions();
		for (int i = 0; i &lt; chosen.size(); i++) {
			// если пользователь выбрал пункт списка,
			// то выводим его в TextView.
			if (chosen.valueAt(i)) {
				selection.append(foods[chosen.keyAt(i)] + " ");
			}
		}
	}
});
</code></pre>

<p><img src="listview6.png" alt="Множественный выбор"></p>

<p>Если нужно получить отдельно список выбранных и невыбранных элементов списка, то можно написать следующее:</p>

<pre><code class="java">
choiceList.setOnItemClickListener(new OnItemClickListener() {
	@Override
	public void onItemClick(AdapterView&lt;?&gt; parent, View v,
			int position, long id) {
		// TODO Auto-generated method stub
		// Clear the TextView before we assign the new content.
		selection.setText("");

		int cntChoice = choiceList.getCount();

		String checked = "";

		String unchecked = "";
		SparseBooleanArray sparseBooleanArray = choiceList
				.getCheckedItemPositions();

		for (int i = 0; i &lt; cntChoice; i++) {

			if (sparseBooleanArray.get(i) == true) {
				checked += choiceList.getItemAtPosition(i).toString()
						+ "\\n";
				// выводим список выбранных элементов
				//selection.setText(checked);
			} else if (sparseBooleanArray.get(i) == false) {
				unchecked += choiceList.getItemAtPosition(i).toString()
						+ "\\n";
				// выводим список невыбранных элементов
				selection.setText(unchecked);
			}
		}
	}
});
</code></pre>

<p>Переменная <i>checked</i> будет содержать список выбранных элементов, а переменная <i>unchecked</i> - список невыбранных элементов.</p>

<p>Следует отметить, что в примерах использовался старый метод <b>getCheckedItemPositions()</b>, доступный с Android 1. В Android 2.2 появился новый метод <b>getCheckedItemIds()</b>. Учтите, что с новым методом можно получить массив только выбранных элементов, хотя в большинстве случаев этого достаточно. Но данный метод требует своих заморочек и в данном моём примере он не заработал.</p>

<h2 class="text-warning" id="underlist">Кнопка под списком</h2>

<p>Если вы хотите разместить кнопку под списком, которая бы не зависела от количества элементов в ListView, то воспользуйтесь весом (layout_weight).</p>

<pre><code class="xml">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;LinearLayout xmlns:android=&quot;http://schemas.android.com/apk/res/android&quot;
    android:layout_width=&quot;fill_parent&quot;
    android:layout_height=&quot;fill_parent&quot;
    android:orientation=&quot;vertical&quot; &gt;

    &lt;ListView
        android:id=&quot;@+id/listView1&quot;
        android:layout_width=&quot;match_parent&quot;
        android:layout_height=&quot;0dp&quot;
        android:layout_weight=&quot;1&quot; &gt;
    &lt;/ListView&gt;

    &lt;Button
        android:id=&quot;@+id/button1&quot;
        android:layout_width=&quot;wrap_content&quot;
        android:layout_height=&quot;wrap_content&quot;
        android:layout_weight=&quot;0&quot;
        android:text=&quot;Button&quot; /&gt;

&lt;/LinearLayout&gt;
</code></pre>

<h2 class="text-warning" id="smoothscroll">Плавная прокрутка в начало списка или любую позицию</h2>

<p>У списка есть специальный метод <b>smoothScrollToPosition()</b>, позволяющий плавно прокрутить до нужного места. Достаточно в методе указать номер позиции для прокрутки:</p>

<pre><code class="java">
ListView list1 = (ListView) findViewById(R.id.listView1);

int n = 0; // прокручиваем до начала
list1.smoothScrollToPosition(n);
</code></pre>

<p>Учтите, что если элементов в списке несколько сотен и вы запустите плавную прокрутку указанным способом, то процесс может растянуться надолго. Например, коты могут и заснуть, не дождавшись конца операции. Задумайтесь.</p>

<h2 class="text-warning" id="customscroll">Настраиваем прокрутку</h2>

<p>У ListView есть атрибуты для настройки внешнего вида полосы прокрутки</p>

<pre>
android:scrollbarTrackVertical="@drawable/scrool_bg"
android:scrollbarThumbVertical="@drawable/scroll"
</pre>

<p>Аналогично это применимо к полосам прокрутки у <b>ScrollView</b>, <b>EditText</b> и т.д.</p>

<h2 class="text-warning" id="listactivity">ListActivity</h2>

<p>Если вам нужна форма, состоящая только из списка, то вам проще воспользоваться системным классом <b>ListActivity</b> вместо стандартного <b>Activity</b>. Именно такой подход описан в документации по ListView. Пример работы описан в статье <a href="../listactivity.html" >ListActivity - создаём прокручиваемый список</a>.</p>

<h2  class="text-warning">Дополнительное чтение</h2>

<p><a href="listview-advanced.html">Продвинутые примеры с ListView</a></p>
<p><a href="../listview/index.html">Отдельный раздел о ListView</a></p>

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

<!-- Mirrored from developer.alexanderklimov.ru/android/views/listview.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:20:14 GMT -->
</html>