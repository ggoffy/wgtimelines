<{include file='db:wgtimelines_header.tpl'}>
<link rel="stylesheet" href="<{$wgtimelines_url}>/templates/css/timelines_colorful.css">
<style>
.timeline:before {
	background-color: <{$bgcolor}>;
}
.timeline > li > .timeline-panel {
    border-color: <{$bgcolor}>;
}
.timeline > li > .timeline-panel:before {
    border-left-color: <{$bgcolor}>;
    border-right-color: <{$bgcolor}>;
}
.timeline > li > .timeline-panel:after {
    border-left-color: <{$bgcolor}>;
    border-right-color: <{$bgcolor}>;
}
.timeline-title {
    color: <{$fontcolor}>;
}
.timeline > li > .timeline-badge {
    color: <{$fontcolor}>;
    background-color:<{$badgecolor}>;
}
.timeline-heading {
    color: <{$fontcolor}>;
    background-color:<{$bgcolor}>;
}
</style>
<{if count($items) > 0}>
    <div class="container-timeline">
        <div class="page-header">
            <h2 id="timeline"><{$timeline_name}></h2>
        </div>
        <ul class="timeline">
        <{foreach item=item from=$items}>
            <li class="<{if $item.inverted > 0}>timeline-inverted<{/if}>">
                <{if $item.year_display}>
                    <div class="timeline-badge"><{$item.year_display}></div>
                <{/if}>
                <div class="timeline-panel">
                    <div class="timeline-heading"> 
                        <h4 class="timeline-title"><{$item.title}></h4>
                    </div>
                    <div class="timeline-body">
                        <{if $panel_imgpos == 'top' && $item.image}>
                            <span class='col-sm-12'><img class='img-timeline img-timeline-<{$panel_imgpos}> img-responsive <{$imgstyle}>' src='<{$wgtimelines_upload_url}>/images/items/<{$item.image}>' alt='items' /></span>
                        <{/if}>
                        <p><{$item.content}></p>
                        <{if $panel_imgpos == 'bottom' && $item.image}>
                            <span class='col-sm-12'><img class='img-timeline img-timeline-<{$panel_imgpos}> img-responsive <{$imgstyle}>' src='<{$wgtimelines_upload_url}>/images/items/<{$item.image}>' alt='items' /></span>
                        <{/if}>
                    </div>
                    <{if $item.date}>
                        <div class="timeline-footer">
                            <p><{$item.date}></p>
                        </div>
                    <{/if}>
                </div>
            </li>
        <{/foreach}>
        </ul>
    </div>
    <div class="clear"></div>
<{/if}>
<{include file='db:wgtimelines_footer.tpl'}>