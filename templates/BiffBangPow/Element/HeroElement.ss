<div class="hero d-flex align-items-center py-4 text-center bg-cover" style="background-image: url('$BackgroundImage.ScaleMaxWidth(1920).Link')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <% if $ShowTitle%>
                    <h1 class="title mb-0">$MarkdownText.Title.RAW</h1>
                <% end_if %>
                <% if $Subtitle %>
                    <h2 class="mt-3">$Subtitle</h2>
                <% end_if %>
            </div>
        </div>
    </div>
</div>