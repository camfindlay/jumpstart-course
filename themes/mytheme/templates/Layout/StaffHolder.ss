<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>
		<% loop $Children %>
            <p>
                <% if $Photo %>
                    <a href="$Link">
                        <img class="left" src="$Photo.CroppedImage(50,50).Url">
                    </a>
                <% end_if %>
                <h2><a href="$Link">$Title</a></h2>
                <em>$Role.Title</em>
            </p>
		<% end_loop %>
	</article>
		$Form
		$CommentsForm
</div>