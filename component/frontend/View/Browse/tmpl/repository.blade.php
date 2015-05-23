<?php
defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Browse\Html  $this */
?>

<div class="item-page{{{ $this->params->get('pageclass_sfx') }}}">
	@if($this->params->get('show_page_heading'))
	<div class="page-header">
		<h1>{{{ $this->params->get('page_heading', $menu->title) }}}</h1>
	</div>
	@endif

	@if(isset($this->items['all']))
		@include('site:com_ars/Browse/generic', ['section' => 'all', 'items' => $this->items['all'], 'title' => ''])
	@else
		@include('site:com_ars/Browse/generic', ['section' => 'normal', 'items' => $this->items['normal'], 'title' => 'ARS_CATEGORY_NORMAL'])
		@include('site:com_ars/Browse/generic', ['section' => 'bleedingedge', 'items' => $this->items['bleedingedge'], 'title' => 'ARS_CATEGORY_BLEEDINGEDGE'])
	@endif
</div>