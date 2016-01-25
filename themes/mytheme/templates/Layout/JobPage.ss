<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>
		<% if $AvailableJobs %>
			<% loop $AvailableJobs %>
                <h2>$Position (#$Reference)</h2>
                <em>Applications close: $ClosingDate.Nice</em>
                <p>$Content</p>
			<% end_loop %>
		<% else %>
            <p>No jobs currently available.</p>
		<% end_if %>
	</article>
		$Form
		$CommentsForm
</div>