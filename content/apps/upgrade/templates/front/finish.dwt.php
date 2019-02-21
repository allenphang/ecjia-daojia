{nocache}
<!DOCTYPE html>
<html>
	<head lang="zh-CN">
	    {include file="./library/head_meta.lbi.php"}
	</head>
	<body id="maincontainer" style="height:auto;">
		{include file="./library/header.lbi.php"}
		<div class="container">
		    <div class="row">
		        <div class="col-mb-12 col-tb-8 col-tb-offset-2">
		            <div class="column-14 start-06 ecjia-install-complete">
                        <h3 class="typecho-install-title">{$finish_message}</h3>
		                <div class="typecho-install-body">
		                	{if $locked_message}
		                	<h5>{$locked_message}</h5>
		                	{/if}
		                	
		                    <div class="p message notice">
                                {t domain="upgrade"  escape=no}<a target="_blank" href="https://ecjia.com/wiki/%E5%B8%AE%E5%8A%A9:ECJia%E5%88%B0%E5%AE%B6">前往ECJIA WIKI，查看帮助文档，使您快速上手。</a>{/t}
		                    </div>
		
		                    <div class="session">
		                    <p>{t domain="upgrade"}您可以将下面链接保存到您的收藏夹哦{/t}</p>
		                    <ul>  
		                    	<li><a target="_blank" href="{$index_url}">{t domain="upgrade"}点击这里进入ECJIA到家首页{/t}</a></li>
		                    	<li><a target="_blank" href="{$h5_url}">{t domain="upgrade"}点击这里进入ECJIA到家H5端{/t}</a></li>
		                    	<li><a target="_blank" href="{$admin_url}">{t domain="upgrade"}点击这里进入ECJIA到家平台后台{/t}</a></li>
		                        <li><a target="_blank" href="{$merchant_url}">{t domain="upgrade"}点击这里进入ECJIA到家商家后台{/t}</a></li>
		                    </ul>
		                    </div>
		                    <p>{t domain="upgrade"}各种体验，希望您能尽情享用ECJIA到家带来的乐趣！{/t}</p>
		                </div>
					</div>
				</div>
			</div>
		</div>	
		
		{include file="./library/footer.lbi.php"}
	</body>
</html>
{/nocache}