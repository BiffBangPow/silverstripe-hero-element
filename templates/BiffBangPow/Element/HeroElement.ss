<div class="hero d-flex align-items-center py-4 bg-cover" style="background-image: url('$BackgroundImage.ScaleMaxWidth(1920).Convert('webp').Link')">
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

                <% with $CTA %>
                    <% if $exists %>
                        <div class="cta">
                        <p>
                        <a class="cta-link btn btn-primary mt-4" href="$URL" <% if $OpenInNew %>target="_blank" rel="noopener noreferrer"<% end_if %>>$Title</a>
                        </p>
                        </div>
                    <% end_if %>
                <% end_with %>
            </div>
        </div>
    </div>
</div>
