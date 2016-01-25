<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
        <ul>
            <li>Phone: $Phone</li>
            <li>Email: $Email</li>
        </ul>
        <% if $Photo %>
            <img class="left" src="$Photo.SetWidth(200).Url">
        <% end_if %>
        <% if $Report %>
            <a href="$Report.Url">$Report.Title ($Report.Extension, $Report.Size)</a>
        <% end_if %>
		<div class="content">$Content</div>
	</article>
		$Form
		$CommentsForm
</div>