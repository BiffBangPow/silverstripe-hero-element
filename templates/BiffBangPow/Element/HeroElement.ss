<div class="hero d-flex align-items-center py-4 bg-cover" style="background-image: url('$BackgroundImage.ScaleMaxWidth(1920).Format('webp').Link')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <% if $Title && $ShowTitle%>
                    <h1 class="title mb-0">$Title</h1>
                <% end_if %>
                <% if $Subtitle %>
                    <div class="mt-3 hero-subtitle">$Subtitle</div>
                <% end_if %>
                <% if $Content %>
                    <div class="mt-3 hero-content">$Content</div>
                <% end_if %>
                <% if $CTAType != 'None' %>
                    <div class="cta">
                        <p>
                            <a href="$CTALink" class="cta-link btn btn-primary mt-4"
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
