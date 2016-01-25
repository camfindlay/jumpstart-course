<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
        <em>$Role.Title</em>
        <ul>
            <li>Phone: $Phone</li>
            <li>Email: $Email</li>
            <li>Department: $Department.Title</li>
            <li>Floor: $Department.Floor</li>
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