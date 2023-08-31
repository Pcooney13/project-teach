window.addEventListener('load', function () {
    // Search Filter
    const search = document.querySelector(".course-search");
    const searchInput = search.querySelector('input[name="search"]');
    const searchResults = [];
    let options = document.querySelectorAll("a[data-filter]");
    options.forEach((element) => {
        searchResults.push(element);
    });
    searchInput.addEventListener("input", displayServiceMatches);

    function findServiceMatches(wordToMatch, searchResults) {
        return searchResults.filter((course) => {
            course.classList.add("hidden");
            const regex = new RegExp(wordToMatch, "gi");
            return course.dataset.filter.match(regex);
        });
    }

    function displayServiceMatches() {
        const matchServiceArray = findServiceMatches(this.value, searchResults);
        const html = matchServiceArray.map((course) => {
            const regex = new RegExp(this.value, "gi");
            const boldCourse = course.innerHTML.replace(
                regex,
                `<span class="font-normal">${this.value}</span>`
            );
            course.classList.remove("hidden");
            return `<a class="block search__suggestion" href="${course.link}"> ${boldCourse}</a>`;
        })
        .slice(0, 7)
        .sort()
        .join("");
    }

    // Date Picker
    const dateForm = document.getElementById("date-form");
    const startDatePicker = document.getElementById('start-date')
    let startDates = document.querySelectorAll("a[data-start]");
    const startDateResults = [];
    startDates.forEach((element) => {
        startDateResults.push(element);
    });
    const endDatePicker = document.getElementById('end-date')
    let endDates = document.querySelectorAll("a[data-end]");
    const endDateResults = [];
    endDates.forEach((element) => {
      endDateResults.push(element);
    });

    // startDatePicker.addEventListener('change' , displayCourseByDate)
    // endDatePicker.addEventListener('change' , displayCourseByDate)
    console.log(dateForm)
    dateForm.addEventListener('submit', displayCourseByDate, true)

    function displayCourseByDate(e) {
        e.preventDefault()
        let startValue = startDatePicker.value.split("-").join("");
        let endValue = endDatePicker.value.split("-").join("");
        startDateResults.map((course) => {
            course.classList.add('hidden')
            if (course.dataset.start < startValue) {
                course.classList.remove('hidden')
            }
        });
        endDateResults.map((course) => {
            course.classList.add("hidden");
            if (course.dataset.end > endValue) {
                course.classList.remove("hidden");
            }
        });
    }
})