<{include file='db:wgtimelines_header.tpl'}>
<link rel="stylesheet" href="<{$wgtimelines_url}>/templates/css/timelines_bootstrap.css">
<{if count($items) > 0}>
    <div class="container-timeline">
        <div class="page-header">
            <h2 id="timeline"><{$timeline_name}></h2>
        </div>
        <ul class="timeline">
        <{foreach item=item from=$items}>
            <li class="<{if $item.inverted > 0}>timeline-inverted<{/if}>">
                <{if $item.year_display}>
                <div class="timeline-badge" style="background-color:<{$bgcolor}>;color:<{$fontcolor}>;"><{$item.year_display}></div>
                <{/if}>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <{if $imgposition_p == 'top' && $item.image}>
                            <span class='col-sm-12'><img class='img-timeline img-responsive <{$imgstyle}>' src='<{$wgtimelines_upload_url}>/images/items/<{$item.image}>' alt='items' /></span>
                        <{/if}>
                        <h4 class="timeline-title"><{$item.title}></h4>
                        <p><small class="text-muted"><{$item.date}></small></p>
                    </div>
                    <div class="timeline-body">
                        <p><{$item.content}></p>
                        <{if $imgposition_p == 'bottom' && $item.image}>
                            <span class='col-sm-12'><img class='img-timeline img-responsive <{$imgstyle}>' src='<{$wgtimelines_upload_url}>/images/items/<{$item.image}>' alt='items' /></span>
                        <{/if}>
                    </div>
                </div>
            </li>
        <{/foreach}>
        </ul>
    </div>
    <div class="clear"></div>
<{/if}>
<{include file='db:wgtimelines_footer.tpl'}>