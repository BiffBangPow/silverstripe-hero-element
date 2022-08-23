<div class="hero d-flex align-items-center py-4 text-center bg-cover" style="background-image: url('<% if $WebPSupport %>$BackgroundImage.ScaleMaxWidth(1920).Format('webp').Link<% else %>$BackgroundImage.ScaleMaxWidth(1920).Link<% end_if %>')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <% if $ShowTitle%>
                    <h1 class="title mb-0">$MarkdownText.Title.RAW</h1>
                <% end_if %>
                <% if $Subtitle %>
                    <h2 class="mt-3">$Subtitle</h2>
                <% end_if %>
                <% if $CTAType != 'None' %>
                    <div class="cta">
                        <p>
                            <a href="$CTALink" class="cta-link"
                                <% if $CTAType == 'External' %>target="_blank" rel="noopener"
                                <% else_if $CTAType == 'Download' %>download
                                <% end_if %>>
                                $LinkText
                            </a>
                        </p>
                    </div>
                <% end_if %>
            </div>
        </div>
    </div>
</div>