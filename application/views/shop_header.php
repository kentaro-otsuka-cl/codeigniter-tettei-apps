<div class="title_banner">
<img src="<?=base_url();?>images/icons/shop_titile.jpg" alt="ショッピング" width="580" height="70" />
</div>

<p class="cart">
【<?=anchor('shop/cart', '買い物カゴ');?>(<?=html_escape($item_count);?>)】&nbsp;
</p>

<div class="shop_search">
<span>検索</span>
<?=form_open('shop/search', ['method' => 'get']);?>
<input type="text" name="q" value="<?=html_escape(isset($q) ? $q : '');?>" />
<input type="submit" value="GO" />
<?=form_close();?>
</div>
