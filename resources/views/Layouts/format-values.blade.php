@empty($author->staff_pos)
    do nothing with the code
@else 
@if ($author->staff_pos == "1") <?php $position = "Marketing Team"; $style = "color: #2072f5"; ?> @endif
@if ($author->staff_pos == "2") <?php $position = "Operations Team"; $style = "color: #2072f5";?> @endif
@if ($author->staff_pos == "3") <?php $position = "Founder"; $style = "color: #25c059";?> @endif
@if ($author->staff_pos == "4") <?php $position = "Technology Team"; $style = "color: #2072f5";?> @endif
@if ($author->staff_pos == "5") <?php $position = "Executive Director"; $style = "color: #7c20f5";?> @endif

@endempty