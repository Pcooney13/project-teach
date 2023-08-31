<?php
require_once('header.php');
// require(dirname(__FILE__) . "/breadcrumbs.php");
?>


<!-- Consultation -->
<div class="relative py-16">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="md:absolute h-full w-full md:bg-[length:75%] bg-center md:bg-[190%_0%] aspect-video md:aspect-none bg-cover md:bg-right bg-no-repeat" style="
                background-image: url('https://projectteachny.org/app/uploads/2020/03/iStock-535162653-1.jpg'); 
            ">
            </div>
            <div class="hidden md:block absolute h-full w-full bg-gradient-to-r from-white via-white"></div>
            <div class="relative mt-auto px-4 md:px-6 py-16 md:w-1/2">
                <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-purple">Frequently Asked Questions</p>
                <p class="font-gotham md:font-gotham-bold text-lg leading-7 text-blue mb-2">Find answers to many common Project TEACH questions below</p>
                <p class="font-gotham-light text-lg leading-7">Welcome to the Project TEACH FAQ section. Below are most frequently asked questions and answers. Our goal is to be a strong resource for pediatric primary care providers in all aspects of mild-to-moderate mental health concerns for children, adolescents, and young adults. If you do not see your question here, please <a class="font-gotham text-blue underline" href="/contact-us">contact us.</a></p>
            </div>
        </div>
    </div>
</div>

<?php if (have_rows('custom_content', 8)) : ?>
    <?php while (have_rows('custom_content', 8)) : the_row(); ?>
        <?php if (get_row_layout() == 'accordian_content') : ?>
            <?php if (have_rows('accordian_block')) : ?>
                <?php $contents = []; ?>
                <?php while (have_rows('accordian_block')) : the_row(); ?> 
                    <?php array_push($contents, get_sub_field('content')); ?>
                    <?php $acc_count++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="max-w-screen-lg px-4 mx-auto pb-16" x-data="getUsers()">
    <input x-ref="searchInput" x-model="search" x-on:keydown.window.prevent.slash="$refs.searchInput.focus()" placeholder="Search for a question" type="search" class="block w-full rounded bg-gray-200 p-4 mb-8 ring-1 ring-light-gray transition-all duration-300 focus:ring-2 focus:ring-blue" />

    <template x-for="user in filteredUsers" :key="user.id">
        <?php $number = 5; ?>
        <div class="mb-8">
            <p class="font-gotham md:font-gotham-bold text-lg md:text-xl leading-7 text-blue mb-2" x-text="user.name" x-text="user.name"></p>
            <div class="font-gotham-light text-lg leading-7">
                <?php echo $contents[$number]; ?>
            </div>
        </div>
        <?php $number++; ?>
    </template>
</div>

<script>
    function getUsers() {
        return {
            search: '',
            allData: userData,
            get filteredUsers() {
                if (this.search === '') {
                    return this.allData;
                }
                return this.allData.filter((user) => {
                    return user.name
                        .replace(/ /g, '')
                        .toLowerCase()
                        .includes(this.search.replace(/ /g, '').toLowerCase());
                });
            }
        };
    }

    const userData = [
        <?php if (have_rows('custom_content', 8)) : ?>
            <?php while (have_rows('custom_content', 8)) : the_row(); ?>
                <?php if (get_row_layout() == 'accordian_content') : ?>
                    <?php if (have_rows('accordian_block')) : ?>
                        <?php $acc_count = 1; ?>
                        <?php while (have_rows('accordian_block')) : the_row(); ?> {
                                id: <?php echo $acc_count; ?>,
                                name: '<?php echo get_sub_field('title'); ?>'
                            },
                            <?php $acc_count++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    ];
</script>


<?php require_once('footer.php'); ?>