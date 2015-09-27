<?php
	$links = array(
		'Domů' => '/domu',
		'O nás' => '/o-nas',
		'Ceník' => '/cenik',
        'Rezervace' => '/rezervace',
		'Kontakt' => '/kontakt',
	);
?>
<div class="masthead">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/domu">Hotel Paradise</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
					foreach ($links as $title => $url) {
						$link = $this->Html->link($title, $url);
						$options = array();
						if (strpos($this->request->here, Router::url($url)) === 0) { // detect query string + params
							$options = array('class' => 'active');
						}
						echo $this->Html->tag('li', $link, $options);
					}
				?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="">Čeština</a></li>
                <li><a href="" style="margin-right: 50px;">English</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
</div>
