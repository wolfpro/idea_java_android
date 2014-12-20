<!DOCTYPE html>
<html>

<!-- Mirrored from developer.alexanderklimov.ru/android/theory/audiomanager.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:19:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset=utf-8>
<title>Android: AudiotManager</title>

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
<li class="active"><a href="index.html">Теория</a></li>
<li class=""><a href="../views.html">Palette</a></li>
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
<h1 class="text-warning">AudiotManager</h1>

<p><a href="#volume">Управление громкостью и воспроизведением</a></p>
<p><a href="#audiofocus">Управление аудиофокусом</a></p>

<p>Класс <b>AudiotManager</b> предназначен для управления громкостью звука и телефонных мелодий. При разработке приложений, связанных с музыкой или чем-то подобным, вам придётся иметь с ним дело.</p>

<p>У класса достаточно большое количество констант и методов, но сам класс прост в использовании.</p>

<p>Пользователи могут слышать звук через встроенный динамик, разъём для проводной гарнитуры, Bluetooth (A2DP аудио). Вы можете через <b>AudioManager</b> определить, куда в настоящее время направляется аудиопоток и выполнить какое-нибудь действие, например, приглушить звук:</p>

<pre><code class="java">
// Получаем доступ к менеджеру звуков
AudioManager manager = (AudioManager) this
		.getSystemService(Context.AUDIO_SERVICE);

if (manager.isBluetoothA2dpOn()) {
	// через Bluetooth
} else if (manager.isSpeakerphoneOn()) {
	// через динамик телефона
} else if (manager.isWiredHeadsetOn()) {
	// Устарело в API 14
	// через проводные наушники
} else {
	// может стоит выключить звук?
}
</code></pre>

<p>Система оповещает через широковещательное намерение <b>ACTION_AUDIO_BECOMING_NOISY</b> о смене источника звука. Зарегистрируйте <b>BroadcastReceiver</b> и прослушивайте нужное намерение.</p>

<pre><code class="java">
private class NoisyAudioStreamReceiver extends BroadcastReceiver {
    @Override
    public void onReceive(Context context, Intent intent) {
        if (AudioManager.ACTION_AUDIO_BECOMING_NOISY.equals(intent.getAction())) {
            // Pause the playback
        }
    }
}
 
private IntentFilter intentFilter = new IntentFilter(AudioManager.ACTION_AUDIO_BECOMING_NOISY);
 
private void startPlayback() {
    registerReceiver(myNoisyAudioStreamReceiver(), intentFilter);
}
 
private void stopPlayback() {
    unregisterReceiver(myNoisyAudioStreamReceiver);
}
</code></pre>

<p>В некоторых других примерах на сайте также используется <b>AudioManager</b>.</p>

<h2 class="text-warning" id="volume">Управление громкостью и воспроизведением</h2>

<p>Вы можете управлять громкостью в своём приложении, используя аппаратные или программные средства контроля звука устройства, блютуз-гарнитуры или наушников.</p>

<p>Также вы можете управлять воспроизведением аудиопотока - пауза, стоп и т.д.</p>

<p>Android поддерживает отдельные звуковые потоки для воспроизведения музыки, сигнала будильника, оповещения, входящего звонка, системных звуков, входящего звонка и DTMF тонов. Пользователь может управлять громкостью каждого потока отдельно.</p>

<p>По умолчанию, при нажатии клавиш регулировки громкости, изменяется уровень громкости активного аудиопотока. Если ваше приложение в данный момент не воспроизводит аудио, то клавиши регулировки громкости регулируют громкость мелодии входящего звонка. Если у вас игра или музыкальное приложение, то когда пользователь нажимает клавиши регулировки громкости, он хочет изменять громкость игры или музыки.</p>

<p>Метод <b>setVolumeControlStream()</b> используется для прямого доступа к клавишам регулировки громкости для звукового потока, который вы укажете. Выяснив, какой аудио поток будет использовать приложение, вы должны установить его в качестве выходного звукового потока. Обычно его вызывают в методе <b>onCreate()</b>.</p>

<pre><code class="java">
setVolumeControlStream(AudioManager.STREAM_MUSIC);
</code></pre>

<p>С этого момента нажатия клавиш регулировки громкости на устройстве влияют на указанный звуковой поток, когда ваша активность или фрагмент являются видимым.</p>

<p>Кнопки контроля воспроизведения, такие как воспроизведение, "пауза", "стоп", "вперёд" и "назад" доступны на некоторых телефонах и многих проводных или беспроводных гарнитурах. Когда пользователь нажимает одну из этих аппаратных кнопок, система рассылает намерение с действием <b>ACTION_MEDIA_BUTTON</b>.</p>

<p>Чтобы обработать нажатие медиа-кнопки, вам необходимо зарегистрировать <b>BroadcastReceiver</b> в файле манифеста:</p>

<pre><code class="xml">
&lt;receiver android:name=&quot;.RemoteControlReceiver&quot;&gt;
    &lt;intent-filter&gt;
        &lt;action android:name=&quot;android.intent.action.MEDIA_BUTTON&quot; /&gt;
    &lt;/intent-filter&gt;
&lt;/receiver&gt;
</code></pre>

<p>Реализация приёмника сама должна извлекать нажатую клавишу, переданную в оповещении. Объект <b>Intent</b> включает в себя ключ <b>EXTRA_KEY_EVENT</b>, класс <b>KeyEvent</b> включает в себя список статических констант <b>KEYCODE_MEDIA_*</b>, который содержит все возможные медиа-кнопки, такие как <b>KEYCODE_MEDIA_PLAY_PAUSE</b> и <b>KEYCODE_MEDIA_NEXT</b>.</p>

<p>Следующий фрагмент показывает, как получить нажатую медиа-кнопку и изменить воспроизведение медиа.</p>

<pre><code class="java">
public class RemoteControlReceiver extends BroadcastReceiver {
    @Override
    public void onReceive(Context context, Intent intent) {
        if (Intent.ACTION_MEDIA_BUTTON.equals(intent.getAction())) {
            KeyEvent event = (KeyEvent)intent.getParcelableExtra(Intent.EXTRA_KEY_EVENT);
            if (KeyEvent.KEYCODE_MEDIA_PLAY == event.getKeyCode()) {
                // Реагируем на нажатие
            }
        }
    }
}
</code></pre>

<p>Так как несколько приложений могут обрабатывать нажатия медиа-кнопок, вы должны программно управлять тем, когда ваше приложение должно получать нажатия кнопок. Следующий код может использоваться в вашем приложении для регистрации и отмены регистрации вашего приемника событий от медиа-кнопок с помощью <b>AudioManager</b>.</p>

<pre><code class="java">
AudioManager manager = this.getSystemService(Context.AUDIO_SERVICE);
...
 
// Начинаем прослушивать нажатия кнопок
manager.registerMediaButtonEventReceiver(RemoteControlReceiver);
...
 
// Больше не слушаем
manager.unregisterMediaButtonEventReceiver(RemoteControlReceiver);
</code></pre>

<p>Как правило, приложения должны отключать приёмники, когда они становятся неактивными или невидимыми. Однако, это не так просто для приложений, воспроизводящих мультимедиа – на самом деле отвечать на нажатия кнопок воспроизведения наиболее важно, когда приложение не видно и, следовательно, не может управляться с экрана пользовательского интерфейса. Лучший подход заключается в регистрации и отмене регистрации приемника событий медиа-кнопок, когда ваше приложение получает и теряет аудиофокус.</p>

<h2 class="text-warning" id="audiofocus">Управление аудиофокусом</h2>

<p>Чтобы не получилось так, что сразу несколько приложений одновременно проигрывают аудиопоток, система использует аудиофокус для контроля режима воспроизведения аудио. Воспроизводить звук может только то приложение, которое имеет аудиофокус. Поэтому вы сами должны позаботиться, чтобы ваше приложение запросило аудиофокус, а также уметь определять момент потери аудиофокуса и среагировать  соответствующим образом.</p>

<p>Запрос аудиофокуса делается с помощью метода <b>requestAudioFocus()</b>, который возвращает <b>AUDIOFOCUS_REQUEST_GRANTED</b>, если запрос был успешным.</p>

<p>Вы должны указать какой поток вы будете использовать и какой тип аудиофокуса вам требуется - временный (transient) или постоянный (permanent). Запрашивайте временный фокус, если вы предполагаете воспроизводить аудио в течение короткого времени. При воспроизведении музыки предпочтительнее запрашивать постоянный аудиофокус.</p>

<p>Запросим постоянный аудиофокус в музыкальном потоке, прежде чем начать воспроизведение, например, когда пользователь нажимает играть или начинает проигрываться фоновая музыка для перехода на следующий уровень игры.</p>

<pre><code class="java">
AudioManager manager = this.getSystemService(Context.AUDIO_SERVICE);

int result = manager.requestAudioFocus(afChangeListener,
        AudioManager.STREAM_MUSIC,
        AudioManager.AUDIOFOCUS_GAIN);
 
if (result == AudioManager.AUDIOFOCUS_REQUEST_GRANTED) {
    manager.unregisterMediaButtonEventReceiver(RemoteControlReceiver);
    // начинаем воспроизведение
}
</code></pre>

<p>Когда приложение закончило воспроизведение, необходимо вызвать метод <b>abandonAudioFocus()</b>. Метод уведомит систему о том, что вам больше не требуется аудиофокус и отменит регистрацию связанную с <b>AudioManager.OnAudioFocusChangeListener</b>. В случае отмены временного аудиофокуса, вызов позволит любому прерванному приложению продолжить воспроизведение.</p>

<pre><code class="java">
manager.abandonAudioFocus(afChangeListener);
</code></pre>

<p>При запросе временного аудиофокуса у вас есть дополнительная опция: активировать приглушение (ducking). Обычно, когда приложение теряет аудиофокус, оно незамедлительно заглушает воспроизведение. Запрашивая временный аудиофокус, который позволяет приглушение, вы говорите другим приложениям, что они могут продолжить воспроизводить аудио с пониженной громкостью, пока фокус не будет им возвращён.</p>

<pre><code class="java">
int result = manager.requestAudioFocus(afChangeListener,
        AudioManager.STREAM_MUSIC,
        AudioManager.AUDIOFOCUS_GAIN_TRANSIENT_MAY_DUCK);
 
if (result == AudioManager.AUDIOFOCUS_REQUEST_GRANTED) {
    // начинаем воспроизведение
}
</code></pre>

<p>Приглушение подходит для приложений, которые используют аудиопоток с интервалами, например, для воспроизведения указаний при прокладке маршрута проезда.</p>

<p>Ваше приложение может потерять фокус, когда его запросит другое приложение. Обратный вызов метода <b>onAudioFocusChange()</b> слушателя изменений аудиофокуса, который вы зарегистрировали при запросе аудиофокуса, получает параметр, описывающий событие изменения фокуса. В частности, возможные события потери фокуса отражают типы запросов фокуса из предыдущего раздела, постоянная потеря, временная потеря и временная потеря с приглушением.</p>

<p>Вы должны продолжать следить за изменениями фокуса и быть готовым возобновить воспроизведение с того места где оно было приостановлено, как только вы восстановите фокус.</p>

<p>Если потеря аудиофокуса является постоянной, то предполагается, что в настоящее время другое приложение используется для прослушивания аудио и ваше приложение должно эффективно себя закончить.</p>

<p>В следующем листинге, мы приостановим воспроизведение, если потеря аудиофокуса временная и возобновим его, когда вновь получим аудиофокус. Если потеря является постоянной, то она отменяет регистрацию нашего приёмника событий кнопок и прекращает контролировать изменения аудиофокуса.</p>

<pre><code class="java">
OnAudioFocusChangeListener afChangeListener = new OnAudioFocusChangeListener() {
    public void onAudioFocusChange(int focusChange) {
        if (focusChange == AUDIOFOCUS_LOSS_TRANSIENT
            // Pause playback
        } else if (focusChange == AudioManager.AUDIOFOCUS_GAIN) {
            // Resume playback 
        } else if (focusChange == AudioManager.AUDIOFOCUS_LOSS) {
            manager.unregisterMediaButtonEventReceiver(RemoteControlReceiver);
            manager.abandonAudioFocus(afChangeListener);
            // Stop playback
        }
    }
};
</code></pre>

<p>В случае временной потери аудиофокуса, где разрешается приглушение, вы можете "сделать потише".</p>

<p>В следующем примере мы снижаем громкость медиапроигрывателя, когда он временно теряет аудиофокус, а затем возвращает громкость на прежний уровень, когда фокус возвращается.</p>

<pre><code class="java">
OnAudioFocusChangeListener afChangeListener = new OnAudioFocusChangeListener() {
    public void onAudioFocusChange(int focusChange) {
        if (focusChange == AUDIOFOCUS_LOSS_TRANSIENT_CAN_DUCK
            // Приглушаем звук
        } else if (focusChange == AudioManager.AUDIOFOCUS_GAIN) {
            // Возвращаем громкость на прежний уровень
        }
    }
};
</code></pre>

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

</div><!--/.fluid-container-->    <!-- Le javascript
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

<!-- Mirrored from developer.alexanderklimov.ru/android/theory/audiomanager.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2014 15:19:53 GMT -->
</html>