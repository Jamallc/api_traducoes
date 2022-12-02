<!DOCTYPE html><html><head><meta charset="utf-8"><title>API Tradução</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #ededed;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#18bc9c;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#eff7fc;border-left:4px solid #3498db}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#3498db}.warning{color:black;background-color:#fcf0ef;border-left:4px solid #d62c1a}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#d62c1a}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #ededed;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#ededed;border-radius:10px;margin:-2px 0}.badge.get{color:white;background-color:#3498db}.badge.head{color:white;background-color:#3498db}.badge.options{color:white;background-color:#3498db}.badge.put{color:white;background-color:#f39c12}.badge.patch{color:white;background-color:#f39c12}.badge.post{color:white;background-color:#18bc9c}.badge.delete{color:white;background-color:#e74c3c}.collapse-button{float:right}.collapse-button .close{display:none;color:#18bc9c;cursor:pointer}.collapse-button .open{color:#18bc9c;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#18bc9c}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e80b8}.definition .method.head{color:#2e80b8}.definition .method.options{color:#2e80b8}.definition .method.post{color:#2eb89d}.definition .method.put{color:#b8822e}.definition .method.patch{color:#b8822e}.definition .method.delete{color:#b83b2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#ededed;text-decoration:none !important;border-top:1px solid #ededed;border-left:1px solid #ededed;border-right:1px solid #ededed;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #ededed;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#ededed;border-bottom:1px solid #ededed;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #ededed}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#000;background-color:white}.action h4.action-heading .method.head{color:#000;background-color:white}.action h4.action-heading .method.options{color:#000;background-color:white}.action h4.action-heading .method.put{color:#000;background-color:white}.action h4.action-heading .method.patch{color:#000;background-color:white}.action h4.action-heading .method.post{color:#000;background-color:white}.action h4.action-heading .method.delete{color:#000;background-color:white}.action h4.action-heading code{color:#444;background-color:rgba(255,255,255,0.7);border-color:transparent;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#3498db}.action.get h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.head{border-color:#3498db}.action.head h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.options{border-color:#3498db}.action.options h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.post{border-color:#18bc9c}.action.post h4.action-heading{color:white;background:#18bc9c;border-bottom-color:#18bc9c}.action.put{border-color:#f39c12}.action.put h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.patch{border-color:#f39c12}.action.patch h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.delete{border-color:#e74c3c}.action.delete h4.action-heading{color:white;background:#e74c3c;border-bottom-color:#e74c3c}</style></head><body class="preload"><div id="nav-background"></div><div class="container-fluid triple"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#geral">Geral</a></div><div class="collapse-content"><ul><li><a href="#header-introdução">Introdução</a></li><li><a href="#header-aglio-blueprint">Aglio/Blueprint</a></li><li><a href="#header-estruturação">Estruturação</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#acesso">Acesso</a></div><div class="collapse-content"><ul><li><a href="#acesso-acesso_logout-post"><span class="badge post"><i class="fa fa-plus"></i></span>acesso_logout</a></li><li><a href="#acesso-acesso_login-post"><span class="badge post"><i class="fa fa-plus"></i></span>acesso_login</a></li><li><a href="#acesso-acesso_cadastro-post"><span class="badge post"><i class="fa fa-plus"></i></span>acesso_cadastro</a></li><li><a href="#acesso-acesso_recuperar_senha-post"><span class="badge post"><i class="fa fa-plus"></i></span>acesso_recuperar_senha</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#usuário">Usuário</a></div><div class="collapse-content"><ul><li><a href="#usuário-usuario_cadastrar-post"><span class="badge post"><i class="fa fa-plus"></i></span>usuario_cadastrar</a></li><li><a href="#usuário-usuario_editar_perfil-put"><span class="badge put"><i class="fa fa-pencil"></i></span>usuario_editar_perfil</a></li><li><a href="#usuário-usuario_excluir-delete"><span class="badge delete"><i class="fa fa-times"></i></span>usuario_excluir</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#projeto">Projeto</a></div><div class="collapse-content"><ul><li><a href="#projeto-projeto_cadastrar-post"><span class="badge post"><i class="fa fa-plus"></i></span>projeto_cadastrar</a></li><li><a href="#projeto-projeto_editar-put"><span class="badge put"><i class="fa fa-pencil"></i></span>projeto_editar</a></li><li><a href="#projeto-projeto_excluir-delete"><span class="badge delete"><i class="fa fa-times"></i></span>projeto_excluir</a></li><li><a href="#projeto-exportar_arquivo-post"><span class="badge post"><i class="fa fa-plus"></i></span>exportar_arquivo</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#lingua">Lingua</a></div><div class="collapse-content"><ul><li><a href="#lingua-lingua_adicionar-post"><span class="badge post"><i class="fa fa-plus"></i></span>lingua_adicionar</a></li><li><a href="#lingua-lingua_excluir-delete"><span class="badge delete"><i class="fa fa-times"></i></span>lingua_excluir</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#texto">Texto</a></div><div class="collapse-content"><ul><li><a href="#texto-texto_adicionar-post"><span class="badge post"><i class="fa fa-plus"></i></span>texto_adicionar</a></li><li><a href="#texto-texto_editar-put"><span class="badge put"><i class="fa fa-pencil"></i></span>texto_editar</a></li><li><a href="#texto-texto_excluir-delete"><span class="badge delete"><i class="fa fa-times"></i></span>texto_excluir</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#sync">Sync</a></div><div class="collapse-content"><ul><li><a href="#sync-sync_projetos-post"><span class="badge post"><i class="fa fa-plus"></i></span>sync_projetos</a></li><li><a href="#sync-sync_editores-post"><span class="badge post"><i class="fa fa-plus"></i></span>sync_editores</a></li><li><a href="#sync-sync_idiomas-post"><span class="badge post"><i class="fa fa-plus"></i></span>sync_idiomas</a></li><li><a href="#sync-sync_textos-post"><span class="badge post"><i class="fa fa-plus"></i></span>sync_textos</a></li><li><a href="#sync-sync_perfil-post"><span class="badge post"><i class="fa fa-plus"></i></span>sync_perfil</a></li></ul></div></div><p style="text-align: center; word-wrap: break-word;"><a href="http://localhost:8001/api_traducoes">http://localhost:8001/api_traducoes</a></p></nav><div class="content"><div id="right-panel-background"></div><div class="middle"><header><h1 id="top">API Tradução</h1></header></div><div class="right"><h5>API Endpoint</h5><a href="http://localhost:8001/api_traducoes">http://localhost:8001/api_traducoes</a></div><div class="middle"></div><div class="middle"><section id="geral" class="resource-group"><h2 class="group-heading">Geral <a href="#geral" class="permalink">&para;</a></h2><h2 id="header-introdução">Introdução <a class="permalink" href="#header-introdução" aria-hidden="true">¶</a></h2>
<hr>
<p>O endereço base de comunicação é <a href="http://localhost:8001/api_traducoes/">http://localhost:8001/api_traducoes/</a>, acompanhado sempre do protocolo seguro https:// como prefixo. As versões da API são agrupadas por diretório de versão, sufixadas ao endereço base (<a href="https://localhost:8001/api_traducoes/">https://localhost:8001/api_traducoes/</a>).
<br></p>
<h2 id="header-aglio-blueprint">Aglio/Blueprint <a class="permalink" href="#header-aglio-blueprint" aria-hidden="true">¶</a></h2>
<hr>
<p>Documentação do padrão blueprint: <a href="https://apiblueprint.org/">https://apiblueprint.org/</a></p>
<p>Documentação do Aglio: <a href="https://github.com/danielgtaylor/aglio">https://github.com/danielgtaylor/aglio</a></p>
<p>Exemplo do Aglio: <a href="http://htmlpreview.github.io/?https://raw.githubusercontent.com/danielgtaylor/aglio/blob/master/examples/slate-triple.html">http://htmlpreview.github.io/?https://raw.githubusercontent.com/danielgtaylor/aglio/blob/master/examples/slate-triple.html</a></p>
<p>Exemplo documentado do Aglio: <a href="https://github.com/danielgtaylor/aglio/blob/master/example.apib">https://github.com/danielgtaylor/aglio/blob/master/example.apib</a></p>
<p>Guia Markdown: <a href="https://docs.pipz.com/central-de-ajuda/learning-center/guia-basico-de-markdown#open">https://docs.pipz.com/central-de-ajuda/learning-center/guia-basico-de-markdown#open</a></p>
<ul>
<li>
<p>Para subir um localhost: aglio -i api.apib --theme-variables flatly --theme-template triple -s</p>
</li>
<li>
<p>Para gerar o html/php: aglio -i api.apib --theme-variables flatly --theme-template triple -o index.php</p>
</li>
<li>
<p>Plugin para VS code: API Blueprint Viewer
<br>
<br></p>
</li>
</ul>
<h2 id="header-estruturação">Estruturação <a class="permalink" href="#header-estruturação" aria-hidden="true">¶</a></h2>
<p>O arquivo principal api.apib é o reponsavel por unir todos os endpoints e organiza-los nesta página referenciando o diretório de cada um deles.</p>
<p>Todos os endpoints estão organizados em pastas correspondentes aos grupos.</p>
<pre><code>doc
├── acesso/
<span class="hljs-string">|   └── acesso_login.md</span></code></pre>
</section></div><div class="middle"><section id="acesso" class="resource-group"><h2 class="group-heading">Acesso <a href="#acesso" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="acesso-acesso_logout" class="resource"><h3 class="resource-heading">acesso_logout <a href="#acesso-acesso_logout" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/acesso/acesso_logout.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">acesso_login</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"logout concluído"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="acesso-acesso_logout-post" class="action post"><h4 class="action-heading"><div class="name">acesso_logout</div><a href="#acesso-acesso_logout-post" class="method post">POST</a><code class="uri">/acesso/acesso_logout.php</code></h4><p>Perde o acesso ao aplicativo interno e seu Token.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>logout concluído</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="acesso-acesso_login" class="resource"><h3 class="resource-heading">acesso_login <a href="#acesso-acesso_login" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/acesso/acesso_login.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">acesso_login</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">USUARIO_EMAIL</span>": <span class="hljs-value"><span class="hljs-string">"teste@email.com"</span></span>,
    "<span class="hljs-attribute">USUARIO_SENHA</span>": <span class="hljs-value"><span class="hljs-string">"12345678"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"login concluído"</span></span>,
    "<span class="hljs-attribute">user</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"qi91wu82ey37rt46"</span></span>,
        "<span class="hljs-attribute">ID_USUARIO</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
        "<span class="hljs-attribute">USUARIO_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Steve Jobs"</span></span>,
        "<span class="hljs-attribute">USUARIO_EMAIL</span>": <span class="hljs-value"><span class="hljs-string">"teste@email.com"</span></span>,
    }
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="acesso-acesso_login-post" class="action post"><h4 class="action-heading"><div class="name">acesso_login</div><a href="#acesso-acesso_login-post" class="method post">POST</a><code class="uri">/acesso/acesso_login.php</code></h4><p>Gerador de token e validação de acesso.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>fail</code></td>
<td>-2</td>
<td>email não ativado</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>email ou senha inválidos</td>
</tr>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>login concluído</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>USUARIO_EMAIL</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>teste@email.com</span></span><p>Email.</p>
</dd><dt>USUARIO_SENHA</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>12345678</span></span><p>Senha de acesso.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="acesso-acesso_cadastro" class="resource"><h3 class="resource-heading">acesso_cadastro <a href="#acesso-acesso_cadastro" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/acesso/acesso_cadastro.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">acesso_cadastro</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">USUARIO_EMAIL</span>": <span class="hljs-value"><span class="hljs-string">"teste@email.com"</span></span>,
    "<span class="hljs-attribute">USUARIO_SENHA</span>": <span class="hljs-value"><span class="hljs-string">"12345678"</span></span>,
    "<span class="hljs-attribute">USUARIO_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Steve Jobs"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"cadastro concluído"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="acesso-acesso_cadastro-post" class="action post"><h4 class="action-heading"><div class="name">acesso_cadastro</div><a href="#acesso-acesso_cadastro-post" class="method post">POST</a><code class="uri">/acesso/acesso_cadastro.php</code></h4><p>Cadastra um novo usuário.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>fail</code></td>
<td>-2</td>
<td>cadastro falhou</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>email já cadastrado</td>
</tr>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>cadastro concluído</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>USUARIO_EMAIL</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>teste@email.com</span></span><p>Email.</p>
</dd><dt>USUARIO_SENHA</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>12345678</span></span><p>Senha de acesso.</p>
</dd><dt>USUARIO_NOME</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>12345678</span></span><p>Nome do usuário.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="acesso-acesso_recuperar_senha" class="resource"><h3 class="resource-heading">acesso_recuperar_senha <a href="#acesso-acesso_recuperar_senha" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/acesso/acesso_recuperar_senha.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">acesso_recuperar_senha</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">USUARIO_EMAIL</span>": <span class="hljs-value"><span class="hljs-string">"teste@email.com"</span></span>,
    "<span class="hljs-attribute">USUARIO_SENHA</span>": <span class="hljs-value"><span class="hljs-string">"senha123"</span></span>,
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"se o email estiver cadastrado, foi enviado um link de recuperação"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="acesso-acesso_recuperar_senha-post" class="action post"><h4 class="action-heading"><div class="name">acesso_recuperar_senha</div><a href="#acesso-acesso_recuperar_senha-post" class="method post">POST</a><code class="uri">/acesso/acesso_recuperar_senha.php</code></h4><p>Envia para o email da pessoa uma recuperação de senha. O envio do token para o endpoint, acontece junto com a senha. Assim que a pessoa clica no link, ele abrirá um local de recuperação e o TOKEN irá como parâmetro na URL, esse token deve ser passado como parâmetro junto com a nova senha, para o endPoint.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>se o email estiver cadastrado, foi enviado um link de recuperação</td>
</tr>
<tr>
<td><code>success</code></td>
<td>1</td>
<td>senha atualizada com sucesso</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>USUARIO_EMAIL</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>teste@email.com</span></span><p>Email.</p>
</dd><dt>USUARIO_SENHA</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>senha123</span></span><p>Nova senha, caso ele clique no link do email.</p>
</dd><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token, caso ele clique no link do email, este virá com um token.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="usuário" class="resource-group"><h2 class="group-heading">Usuário <a href="#usuário" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="usuário-usuario_cadastrar" class="resource"><h3 class="resource-heading">usuario_cadastrar <a href="#usuário-usuario_cadastrar" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/usuarios/usuario_cadastrar.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">usuario_cadastrar</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">USUARIO_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Teste Dois"</span></span>,
    "<span class="hljs-attribute">USUARIO_EMAIL</span>": <span class="hljs-value"><span class="hljs-string">"teste@email.com"</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"23"</span></span>,
    "<span class="hljs-attribute">NIVEL_PERMISSOES</span>": <span class="hljs-value"><span class="hljs-string">"2"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"usuário adicionado"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="usuário-usuario_cadastrar-post" class="action post"><h4 class="action-heading"><div class="name">usuario_cadastrar</div><a href="#usuário-usuario_cadastrar-post" class="method post">POST</a><code class="uri">/usuarios/usuario_cadastrar.php</code></h4><p>Cadastra um usuário a um projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>fail</code></td>
<td>-2</td>
<td>projeto inexistente</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>email já cadastrado no projeto</td>
</tr>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>link de cadastro enviado ao email do usuário</td>
</tr>
<tr>
<td><code>success</code></td>
<td>1</td>
<td>usuário adicionado</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>USUARIO_NOME</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Teste Dois</span></span><p>Nome.</p>
</dd><dt>USUARIO_EMAIL</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>teste@email.com</span></span><p>Email.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>23</span></span><p>ID do projeto.</p>
</dd><dt>NIVEL_PERMISSOES</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>2</span></span><p>Nível de permissão (1: Master, 2: Editor, 3: Leitor).</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="usuário-usuario_editar_perfil" class="resource"><h3 class="resource-heading">usuario_editar_perfil <a href="#usuário-usuario_editar_perfil" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/usuarios/usuario_editar_perfil.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">usuario_editar_perfil</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">USUARIO_ID</span>": <span class="hljs-value"><span class="hljs-string">"123"</span></span>,
    "<span class="hljs-attribute">USUARIO_EMAIL</span>": <span class="hljs-value"><span class="hljs-string">"outroemail@email.com"</span></span>,
    "<span class="hljs-attribute">USUARIO_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Jobs Silva"</span></span>,
    "<span class="hljs-attribute">USUARIO_SENHA</span>": <span class="hljs-value"><span class="hljs-string">"1234asdqwe"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"perfil salvo com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="usuário-usuario_editar_perfil-put" class="action put"><h4 class="action-heading"><div class="name">usuario_editar_perfil</div><a href="#usuário-usuario_editar_perfil-put" class="method put">PUT</a><code class="uri">/usuarios/usuario_editar_perfil.php</code></h4><p>Edita o perfil do usuário.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>fail</code></td>
<td>-2</td>
<td>senha não confere</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>email já cadastrado</td>
</tr>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>perfil salvo com sucesso</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>USUARIO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>123</span></span><p>ID.</p>
</dd><dt>USUARIO_EMAIL</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>outroemail@email.com</span></span><p>EMAIL.</p>
</dd><dt>USUARIO_NOME</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Jobs Silva</span></span><p>NOME.</p>
</dd><dt>USUARIO_SENHA</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1234asdqwe</span></span><p>SENHA.</p>
</dd><dt>USUARIO_SENHA_ANTERIOR</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>1234asdqwe</span></span><p>SENHA ANTERIOR.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="usuário-usuario_excluir" class="resource"><h3 class="resource-heading">usuario_excluir <a href="#usuário-usuario_excluir" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/usuarios/usuario_excluir.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">usuario_excluir</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">USUARIO_ID</span>": <span class="hljs-value"><span class="hljs-string">"123"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"usuário desvinculado com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="usuário-usuario_excluir-delete" class="action delete"><h4 class="action-heading"><div class="name">usuario_excluir</div><a href="#usuário-usuario_excluir-delete" class="method delete">DELETE</a><code class="uri">/usuarios/usuario_excluir.php</code></h4><p>Desvincula o usuário do projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>usuário desvinculado com sucesso</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>USUARIO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>123</span></span><p>ID.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="projeto" class="resource-group"><h2 class="group-heading">Projeto <a href="#projeto" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="projeto-projeto_cadastrar" class="resource"><h3 class="resource-heading">projeto_cadastrar <a href="#projeto-projeto_cadastrar" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/projeto/projeto_cadastrar.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">projeto_cadastrar</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">PROJETO_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Projeto delivery"</span></span>,
    "<span class="hljs-attribute">PROJETO_DESCRICAO</span>": <span class="hljs-value"><span class="hljs-string">"Essa é a descrição do projeto delivery"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"projeto cadastrado com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="projeto-projeto_cadastrar-post" class="action post"><h4 class="action-heading"><div class="name">projeto_cadastrar</div><a href="#projeto-projeto_cadastrar-post" class="method post">POST</a><code class="uri">/projeto/projeto_cadastrar.php</code></h4><p>Cadastra um novo projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>projeto cadastrado com sucesso</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>O nome do projeto já está cadastrado</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>PROJETO_NOME</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Projeto delivery</span></span><p>Email.</p>
</dd><dt>PROJETO_DESCRICAO</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Essa é a descrição do projeto delivery</span></span><p>Email.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="projeto-projeto_editar" class="resource"><h3 class="resource-heading">projeto_editar <a href="#projeto-projeto_editar" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/projeto/projeto_editar.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">projeto_editar</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">PROJETO_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Projeto delivery"</span></span>,
    "<span class="hljs-attribute">PROJETO_DESCRICAO</span>": <span class="hljs-value"><span class="hljs-string">"Essa é a descrição do projeto delivery"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"projeto salvo com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="projeto-projeto_editar-put" class="action put"><h4 class="action-heading"><div class="name">projeto_editar</div><a href="#projeto-projeto_editar-put" class="method put">PUT</a><code class="uri">/projeto/projeto_editar.php</code></h4><p>Edita um projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>O projeto salvo com sucesso</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>O nome do projeto já está cadastrado</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-2</td>
<td>O projeto não existe</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>ID.</p>
</dd><dt>PROJETO_NOME</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Projeto delivery</span></span><p>Email.</p>
</dd><dt>PROJETO_DESCRICAO</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Essa é a descrição do projeto delivery</span></span><p>Email.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="projeto-projeto_excluir" class="resource"><h3 class="resource-heading">projeto_excluir <a href="#projeto-projeto_excluir" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/projeto/projeto_excluir.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">projeto_excluir</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"projeto excluído com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="projeto-projeto_excluir-delete" class="action delete"><h4 class="action-heading"><div class="name">projeto_excluir</div><a href="#projeto-projeto_excluir-delete" class="method delete">DELETE</a><code class="uri">/projeto/projeto_excluir.php</code></h4><p>Exclui um projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>projeto excluído com sucesso</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>O projeto não existe</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>ID.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="projeto-exportar_arquivo" class="resource"><h3 class="resource-heading">exportar_arquivo <a href="#projeto-exportar_arquivo" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/projeto/exportar_arquivo.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">exportar_arquivo</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"arquivos exportados com sucesso"</span>,
}
arquivo <span class="hljs-number">1</span>: texts.js =&gt;
    texts = [
        {
            pt: {
                assinar_pacote: <span class="hljs-string">"Assinar pacote"</span>,
            },
            en: {
                assinar_pacote: <span class="hljs-string">"Sign package"</span>,
            },
            es: {
                assinar_pacote: <span class="hljs-string">"Firmar paquete"</span>,
            }
        },

    {
        pt: {
            assinatura_nao_encontrada: <span class="hljs-string">"Assinatura não encontrada"</span>,
        },
        en: {
            assinatura_nao_encontrada: <span class="hljs-string">"Signature not found"</span>,
        },
        es: {
            assinatura_nao_encontrada: <span class="hljs-string">"Firma no encontrada"</span>,
        }
    }
]
arquivo <span class="hljs-number">2</span>: txt.interface.ts =&gt; 
    <span class="hljs-keyword">export</span> interface TextsProps {
        assinar_pacote: string;
        assinatura_nao_encontrada: string;
    }</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="projeto-exportar_arquivo-post" class="action post"><h4 class="action-heading"><div class="name">exportar_arquivo</div><a href="#projeto-exportar_arquivo-post" class="method post">POST</a><code class="uri">/projeto/exportar_arquivo.php</code></h4><p>Exporta todas as frases cadastradas no projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>arquivos exportados com sucesso</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>Id do projeto.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="lingua" class="resource-group"><h2 class="group-heading">Lingua <a href="#lingua" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="lingua-lingua_adicionar" class="resource"><h3 class="resource-heading">lingua_adicionar <a href="#lingua-lingua_adicionar" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/lingua/lingua_adicionar.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">lingua_adicionar</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">LINGUA_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Português"</span></span>,
    "<span class="hljs-attribute">LINGUA_SIGLA</span>": <span class="hljs-value"><span class="hljs-string">"PT"</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"língua adicionada com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="lingua-lingua_adicionar-post" class="action post"><h4 class="action-heading"><div class="name">lingua_adicionar</div><a href="#lingua-lingua_adicionar-post" class="method post">POST</a><code class="uri">/lingua/lingua_adicionar.php</code></h4><p>Cadastra uma nova língua.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>língua adicionada com sucesso</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>A lingua e/ou sigla já esta(ão) cadastrada(s)</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>LINGUA_NOME</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Português</span></span><p>Idioma.</p>
</dd><dt>LINGUA_SIGLA</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>PT</span></span><p>Sigla.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>Id.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="lingua-lingua_excluir" class="resource"><h3 class="resource-heading">lingua_excluir <a href="#lingua-lingua_excluir" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/lingua/lingua_excluir.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">lingua_excluir</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">LINGUA_ID</span>": <span class="hljs-value"><span class="hljs-string">"23"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"língua excluída com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="lingua-lingua_excluir-delete" class="action delete"><h4 class="action-heading"><div class="name">lingua_excluir</div><a href="#lingua-lingua_excluir-delete" class="method delete">DELETE</a><code class="uri">/lingua/lingua_excluir.php</code></h4><p>Excluir uma língua.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>Língua excluída com sucesso</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>A língua não existe</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>LINGUA_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>23</span></span><p>Id.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="texto" class="resource-group"><h2 class="group-heading">Texto <a href="#texto" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="texto-texto_adicionar" class="resource"><h3 class="resource-heading">texto_adicionar <a href="#texto-texto_adicionar" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/texto/texto_adicionar.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">texto_adicionar</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">TEXTO_FRASE</span>": <span class="hljs-value"><span class="hljs-string">"Uma nova frase"</span></span>,
    "<span class="hljs-attribute">TEXTO_SIGLA</span>": <span class="hljs-value"><span class="hljs-string">"PT"</span></span>,
    "<span class="hljs-attribute">TEXTO_ID_FRASE</span>": <span class="hljs-value"><span class="hljs-string">"nova_frase"</span></span>,
    "<span class="hljs-attribute">LINGUA_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"texto adicionado com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="texto-texto_adicionar-post" class="action post"><h4 class="action-heading"><div class="name">texto_adicionar</div><a href="#texto-texto_adicionar-post" class="method post">POST</a><code class="uri">/texto/texto_adicionar.php</code></h4><p>Cadastra um novo texto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>já existe um cadastro com esse id</td>
</tr>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>texto adicionado com sucesso</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>TEXTO_FRASE</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Uma nova frase</span></span><p>Frase da tradução.</p>
</dd><dt>TEXTO_SIGLA</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>PT</span></span><p>Sigla da língua.</p>
</dd><dt>TEXTO_ID_FRASE</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>nova_frase</span></span><p>Id da frase.</p>
</dd><dt>LINGUA_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>Id da língua.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="texto-texto_editar" class="resource"><h3 class="resource-heading">texto_editar <a href="#texto-texto_editar" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/texto/texto_editar.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">texto_editar</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">TEXTO_FRASE</span>": <span class="hljs-value"><span class="hljs-string">"Uma outra frase"</span></span>,
    "<span class="hljs-attribute">TEXTO_SIGLA</span>": <span class="hljs-value"><span class="hljs-string">"PT"</span></span>,
    "<span class="hljs-attribute">TEXTO_ID_FRASE</span>": <span class="hljs-value"><span class="hljs-string">"nova_frase"</span></span>,
    "<span class="hljs-attribute">TEXTO_ID</span>": <span class="hljs-value"><span class="hljs-string">"15"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"texto salvo com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="texto-texto_editar-put" class="action put"><h4 class="action-heading"><div class="name">texto_editar</div><a href="#texto-texto_editar-put" class="method put">PUT</a><code class="uri">/texto/texto_editar.php</code></h4><p>Edita um texto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>já existe uma frase com esse id</td>
</tr>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>texto salvo com sucesso</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>TEXTO_FRASE</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>Uma outra frase</span></span><p>Frase da tradução.</p>
</dd><dt>TEXTO_SIGLA</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>PT</span></span><p>Sigla da língua.</p>
</dd><dt>TEXTO_ID_FRASE</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>nova_frase</span></span><p>Id da frase.</p>
</dd><dt>TEXTO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>15</span></span><p>Id da frase.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="texto-texto_excluir" class="resource"><h3 class="resource-heading">texto_excluir <a href="#texto-texto_excluir" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/texto/texto_excluir.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">texto_excluir</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">TEXTO_ID</span>": <span class="hljs-value"><span class="hljs-string">"15"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"texto excluído com sucesso"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="texto-texto_excluir-delete" class="action delete"><h4 class="action-heading"><div class="name">texto_excluir</div><a href="#texto-texto_excluir-delete" class="method delete">DELETE</a><code class="uri">/texto/texto_excluir.php</code></h4><p>Exclui um texto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>Texto excluído com sucesso</td>
</tr>
<tr>
<td><code>fail</code></td>
<td>-1</td>
<td>O texto não existe</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>TEXTO_ID</dt><dd><code>string</code>&nbsp;<span>(optional)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>15</span></span><p>Id da frase.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><section id="sync" class="resource-group"><h2 class="group-heading">Sync <a href="#sync" class="permalink">&para;</a></h2></section></div><div class="middle"><div id="sync-sync_projetos" class="resource"><h3 class="resource-heading">sync_projetos <a href="#sync-sync_projetos" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/sync/sync_projetos.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">sync_projetos</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"success"</span></span>,
  "<span class="hljs-attribute">projetos</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">PROJETOS_ID</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">PROJETOS_NOME</span>": <span class="hljs-value"><span class="hljs-string">"App Traduções"</span></span>,
      "<span class="hljs-attribute">PROJETOS_DESCRICAO</span>": <span class="hljs-value"><span class="hljs-string">"Um aplicativo que cria as traduções de outros aplicativos!"</span></span>,
      "<span class="hljs-attribute">PROJETOS_CRIACAO</span>": <span class="hljs-value"><span class="hljs-string">"2022-09-04 17:44:17"</span></span>,
      "<span class="hljs-attribute">PROJETOS_ATUALIZACAO</span>": <span class="hljs-value"><span class="hljs-string">"2022-09-04 17:44:17"</span></span>,
      "<span class="hljs-attribute">PROJETOS_EXCLUIDO</span>": <span class="hljs-value"><span class="hljs-literal">null</span></span>,
      "<span class="hljs-attribute">PROJETO_USUARIO_ID</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">NIVEL_PERMISSOES</span>": <span class="hljs-value"><span class="hljs-number">2</span>
    </span>},
    {
      "<span class="hljs-attribute">PROJETOS_ID</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
      "<span class="hljs-attribute">PROJETOS_NOME</span>": <span class="hljs-value"><span class="hljs-string">"App Teste"</span></span>,
      "<span class="hljs-attribute">PROJETOS_DESCRICAO</span>": <span class="hljs-value"><span class="hljs-string">"Descrição de teste"</span></span>,
      "<span class="hljs-attribute">PROJETOS_CRIACAO</span>": <span class="hljs-value"><span class="hljs-string">"2022-11-28 16:56:41"</span></span>,
      "<span class="hljs-attribute">PROJETOS_ATUALIZACAO</span>": <span class="hljs-value"><span class="hljs-string">"2022-11-28 17:49:56"</span></span>,
      "<span class="hljs-attribute">PROJETOS_EXCLUIDO</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
      "<span class="hljs-attribute">PROJETO_USUARIO_ID</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">NIVEL_PERMISSOES</span>": <span class="hljs-value"><span class="hljs-number">1</span>
    </span>},
    {
      "<span class="hljs-attribute">PROJETOS_ID</span>": <span class="hljs-value"><span class="hljs-number">4</span></span>,
      "<span class="hljs-attribute">PROJETOS_NOME</span>": <span class="hljs-value"><span class="hljs-string">"Aasdasdas"</span></span>,
      "<span class="hljs-attribute">PROJETOS_DESCRICAO</span>": <span class="hljs-value"><span class="hljs-string">"Descrição de teste 2"</span></span>,
      "<span class="hljs-attribute">PROJETOS_CRIACAO</span>": <span class="hljs-value"><span class="hljs-string">"2022-12-02 14:55:28"</span></span>,
      "<span class="hljs-attribute">PROJETOS_ATUALIZACAO</span>": <span class="hljs-value"><span class="hljs-string">"2022-12-02 14:55:28"</span></span>,
      "<span class="hljs-attribute">PROJETOS_EXCLUIDO</span>": <span class="hljs-value"><span class="hljs-literal">null</span></span>,
      "<span class="hljs-attribute">PROJETO_USUARIO_ID</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
      "<span class="hljs-attribute">NIVEL_PERMISSOES</span>": <span class="hljs-value"><span class="hljs-number">1</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="sync-sync_projetos-post" class="action post"><h4 class="action-heading"><div class="name">sync_projetos</div><a href="#sync-sync_projetos-post" class="method post">POST</a><code class="uri">/sync/sync_projetos.php</code></h4><p>Retorna todos os projetos cadastrados.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>success</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="sync-sync_editores" class="resource"><h3 class="resource-heading">sync_editores <a href="#sync-sync_editores" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/sync/sync_editores.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">sync_editores</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"editores"</span>: [
        {
            USUARIO_ID: <span class="hljs-number">20</span>,
            USUARIO_NOME: <span class="hljs-string">"Fulano de Tal"</span>,
            USUARIO_EMAIL: <span class="hljs-string">"contato@email.com"</span>,
            NIVEL_PERMISSOES: <span class="hljs-string">"1"</span>,
            NIVEL_CRIACAO: <span class="hljs-string">"2022-04-01 11:00:02"</span>,
        },
        {
            USUARIO_ID: <span class="hljs-number">123</span>,
            USUARIO_NOME: <span class="hljs-string">"Fulano de Tal"</span>,
            USUARIO_EMAIL: <span class="hljs-string">"contato@email.com"</span>,
            NIVEL_PERMISSOES: <span class="hljs-string">"2"</span>,
            NIVEL_CRIACAO: <span class="hljs-string">"2022-04-01 12:30:07"</span>,
        },
        {
            USUARIO_ID: <span class="hljs-number">124</span>,
            USUARIO_NOME: <span class="hljs-string">"Sicrano de Tal"</span>,
            USUARIO_EMAIL: <span class="hljs-string">"contato2@email.com"</span>,
            NIVEL_PERMISSOES: <span class="hljs-string">"3"</span>,
            NIVEL_CRIACAO: <span class="hljs-string">"2022-04-04 14:30:04"</span>,
        },
    ]
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="sync-sync_editores-post" class="action post"><h4 class="action-heading"><div class="name">sync_editores</div><a href="#sync-sync_editores-post" class="method post">POST</a><code class="uri">/sync/sync_editores.php</code></h4><p>Retorna todos os editores cadastrados no projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>success</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>Id do projeto.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="sync-sync_idiomas" class="resource"><h3 class="resource-heading">sync_idiomas <a href="#sync-sync_idiomas" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/sync/sync_idiomas.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">sync_idiomas</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">PROJETO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"idiomas"</span>: [
        {
            LINGUA_ID: <span class="hljs-number">12</span>,
            LINGUA_NOME: <span class="hljs-string">"Português"</span>,
            LINGUA_SIGLA: <span class="hljs-string">"PT"</span>,
            LINGUA_CRIACAO: <span class="hljs-string">"2022-04-01 12:30:07"</span>,
            LINGUA_ATUALIZACAO: <span class="hljs-string">"2022-04-02 14:30:07"</span>,
        },
        {
            LINGUA_ID: <span class="hljs-number">13</span>,
            LINGUA_NOME: <span class="hljs-string">"Inglês"</span>,
            LINGUA_SIGLA: <span class="hljs-string">"EN"</span>,
            LINGUA_CRIACAO: <span class="hljs-string">"2022-04-01 12:30:07"</span>,
            LINGUA_ATUALIZACAO: <span class="hljs-string">"2022-04-02 14:30:07"</span>,
        },
    ]
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="sync-sync_idiomas-post" class="action post"><h4 class="action-heading"><div class="name">sync_idiomas</div><a href="#sync-sync_idiomas-post" class="method post">POST</a><code class="uri">/sync/sync_idiomas.php</code></h4><p>Retorna todos os idiomas cadastrados no projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>success</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>PROJETO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>Id do projeto.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="sync-sync_textos" class="resource"><h3 class="resource-heading">sync_textos <a href="#sync-sync_textos" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/sync/sync_textos.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">sync_textos</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">LINGUA_ID</span>": <span class="hljs-value"><span class="hljs-string">"23"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"idiomas"</span>: [
        {
            TEXTO_ID: <span class="hljs-number">56</span>,
            TEXTO_ID_FRASE: <span class="hljs-string">"frase_app1"</span>,
            TEXTO_FRASE: <span class="hljs-string">"Uma frase para o app1"</span>,
            TEXTO_SIGLA: <span class="hljs-string">"PT"</span>,
            TEXTO_ATUALIZACAO: <span class="hljs-string">"2022-04-02 14:30:07"</span>,
            TEXTO_LINGUA_ID: <span class="hljs-string">"23"</span>
        },
        {
            TEXTO_ID: <span class="hljs-number">57</span>,
            TEXTO_ID_FRASE: <span class="hljs-string">"frase_app2"</span>,
            TEXTO_FRASE: <span class="hljs-string">"Uma frase para o app2"</span>,
            TEXTO_SIGLA: <span class="hljs-string">"PT"</span>,
            TEXTO_ATUALIZACAO: <span class="hljs-string">"2022-04-02 14:30:07"</span>,
            TEXTO_LINGUA_ID: <span class="hljs-string">"23"</span>
        },
        {
            TEXTO_ID: <span class="hljs-number">58</span>,
            TEXTO_ID_FRASE: <span class="hljs-string">"frase_app3"</span>,
            TEXTO_FRASE: <span class="hljs-string">"Uma frase para o app3"</span>,
            TEXTO_SIGLA: <span class="hljs-string">"PT"</span>,
            TEXTO_ATUALIZACAO: <span class="hljs-string">"2022-04-02 14:30:07"</span>,
            TEXTO_LINGUA_ID: <span class="hljs-string">"23"</span>
        },
    ]
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="sync-sync_textos-post" class="action post"><h4 class="action-heading"><div class="name">sync_textos</div><a href="#sync-sync_textos-post" class="method post">POST</a><code class="uri">/sync/sync_textos.php</code></h4><p>Retorna todas as frases cadastradas no idioma.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>success</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>LINGUA_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>23</span></span><p>Id da lingua.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><div id="sync-sync_perfil" class="resource"><h3 class="resource-heading">sync_perfil <a href="#sync-sync_perfil" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">http://localhost:8001/api_traducoes</span>/sync/sync_perfil.php</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">sync_perfil</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">TOKEN</span>": <span class="hljs-value"><span class="hljs-string">"ASDDF1234JKDFL="</span></span>,
    "<span class="hljs-attribute">USUARIO_ID</span>": <span class="hljs-value"><span class="hljs-string">"20"</span></span>,
    "<span class="hljs-attribute">Idioma</span>": <span class="hljs-value"><span class="hljs-string">"pt"</span></span>,
}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">400</span><span class="tab-button">401</span><span class="tab-button">404</span></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"message"</span>: <span class="hljs-string">"success"</span>,
    <span class="hljs-string">"perfil"</span>: {
        USUARIO_ID: <span class="hljs-number">20</span>,
        USUARIO_NOME: <span class="hljs-string">"Fulano de Tal"</span>,
        USUARIO_EMAIL: <span class="hljs-string">"contato@email.com"</span>,
        USUARIO_SENHA: <span class="hljs-string">"ASDHRTWE1223ASDZ"</span>,
        USUARIO_TOKEN: <span class="hljs-string">"ASDHRTWE1223ASDZ"</span>,
        NIVEL_CRIACAO: <span class="hljs-string">"2022-04-01 12:30:07"</span>,
        NIVEL_ATUALIZACAO: <span class="hljs-string">"2022-04-01 12:30:07"</span>,
    }
}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">400</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Bad request"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">401</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthorized"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">404</span></span>,
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Not found"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div></div></div><div class="middle"><div id="sync-sync_perfil-post" class="action post"><h4 class="action-heading"><div class="name">sync_perfil</div><a href="#sync-sync_perfil-post" class="method post">POST</a><code class="uri">/sync/sync_perfil.php</code></h4><p>Retorna todos os editores cadastrados no projeto.</p>
<table>
<thead>
<tr>
<th>status</th>
<th>code</th>
<th>message</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>success</code></td>
<td>0</td>
<td>success</td>
</tr>
</tbody>
</table>
<div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>TOKEN</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>ASDDF1234JKDFL=</span></span><p>Token.</p>
</dd><dt>USUARIO_ID</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>20</span></span><p>Id do projeto.</p>
</dd><dt>Idioma</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>pt</span></span><p>Idioma.</p>
</dd></dl></div></div></div><hr class="split"><div class="middle"><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 02 Dec 2022</p></div></div></div></div><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>