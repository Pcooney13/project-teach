<!-- https://projectteachny.org/app/uploads/2020/09/PT-new-LMS-09_29_20.pdf -->
<div class="flex items-center gap-x-6 bg-blue px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
    <p class="text-sm leading-6 text-white">
        <a class="font-gotham" href="#">
            <strong class="font-gotham-medium">Learning Management System (LMS) User Guide</strong>
            <svg viewBox="0 0 2 2" class="hidden md:inline mx-2 h-0.5 w-0.5 fill-current" aria-hidden="true">
                <circle cx="1" cy="1" r="1" />
            </svg>
            <span class="hidden md:inline">Instructions on how to use our LMS to enroll in classes, view credits and more</span>
            <span class="hidden md:inline" aria-hidden="true">&rarr;</span>
        </a>
    </p>
    <div class="flex flex-1 justify-end">
        <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
            <span class="sr-only">Dismiss</span>
            <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
        </button>
    </div>
</div>

<?php require_once('header.php');

// Post Query
$post_args = array(
    'numberposts'    => -1,
    'post_type'        => 'events',
    'meta_query'    => array(
        'relation'        => 'OR',
        array(
            'compare'    => '=',
            'value'        => 5807,
        )
    )
);
$post_query = new WP_Query($post_args);

?>



<!-- Mailchimp Archive -->
<style type="text/css">
    .display_archive {
        font-family: arial, verdana;
        font-size: 12px;
    }

    .campaign {
        line-height: 125%;
        margin: 5px;
    }
</style>
<script language="javascript" src="//projectteachny.us4.list-manage.com/generate-js/?u=bfcc0eb023a330efed7da0d84&fid=30822&show=10" type="text/javascript"></script>

<?php require_once('footer.php'); ?>