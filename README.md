# yii2-pevnev-domain-helper
<p>
<h2>Install</h2>
<b>composer require "wolverineo250kr/yii2-pevnev-domain-helper":"*"</b>
<h2>Usage</h2>
To get domain zone simply call in your Yii2 app following php command:
<pre>
\wolverineo250kr\helpers\domain\DomainHelper::getZone();
</pre>
<b>given url:</b> https://yourdomain.com<br>
<b>result example:</b> com<p>
<br/>
----------------------------------------------------------------
 <br/>
To get domain name without subdomain simply call in your Yii2 app following php command:
<pre>
\wolverineo250kr\helpers\domain\DomainHelper::getBase();
</pre>
<b>given url:</b> https://yourdomain.com<br>
<b>result example:</b> yourdomain.com<p>
<br/>
----------------------------------------------------------------
<br/>
To get scheme call in your Yii2 app following php command:
<pre>
\wolverineo250kr\helpers\domain\DomainHelper::getScheme();
</pre> 
<b>given url:</b> https://yourdomain.com<br>
<b>result example:</b> https<p>
<br/>
----------------------------------------------------------------
<br/>
To get subdomain call in your Yii2 app following php command*:
<pre>
\wolverineo250kr\helpers\domain\DomainHelper::getSubdomain();
</pre>
<b>given url:</b> https://subdomain.yourdomain.com<br>
<b>result example:</b> subdomain<br/>
<sub>* Incase of url has more than one subdomain, the command will always take first subdomain. Thus https://subdomain-one.subdomain-two.yourdomain.com will output <b>subdomain-one</b></sub>
