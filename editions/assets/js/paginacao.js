(function(document, window, undefined) {
    var $body = document.getElementsByTagName('body')[0],
        $head = document.getElementsByTagName('head')[0],
        $style = document.createElement('style'),
        $prevWeeklyLink = document.createElement('a'),
        $nextWeeklyLink = document.createElement('a'),

        // This returns the next and previous weekly number :D
        the = (function (param) {
            // Return string numbers
            var weeklyNumber = Math.ceil(document.location.pathname.replace(/[^\d]+/g, '')),
                // if the param number is 9, returns 09
                prependZero = function (num) {
                    var num = (num < 0)? 0 : num;

                    if (num < 10) {
                        num = '0'+num;
                    }

                    return num;
                },
                next = weeklyNumber + 1,
                prev = weeklyNumber - 1;

            return {
                next: { url: prependZero(next) },
                prev: { url: prependZero(prev) }
            }
        }());

    // If something is wrong, stop here!
    if ($body === undefined) {
        return false;
    }

    // Prepare the previous weekly link
    $prevWeeklyLink.className = 'pagination-weekly pagination-weekly-prev n'+the.prev.url;
    $prevWeeklyLink.innerText = 'Ver Weekly #' + the.prev.url;
    $prevWeeklyLink.title = 'Ver Weekly #' + the.prev.url;
    $prevWeeklyLink.href = the.prev.url + '.html';

    // Prepare the next weekly Link
    $nextWeeklyLink.className = 'pagination-weekly pagination-weekly-next';
    $nextWeeklyLink.innerText = 'Ver Weekly #' + the.next.url;
    $nextWeeklyLink.title = 'Ver Weekly #' + the.next.url;
    $nextWeeklyLink.href = the.next.url + '.html';

    // Insert links in the DOM
    $body.insertBefore($prevWeeklyLink, $body.children[0]);
    $body.insertBefore($nextWeeklyLink, $body.children[0]);

    /**
        Create and Insert the CSS in the DOM
    **/
    $style.innerHTML = ' \
        .pagination-weekly { \
            position: absolute; \
            top: 50%; \
            margin-top: -18px; \
            z-index: 10; \
            width: 36px; \
            height: 36px; \
            font-size: 0; \
            text-decoration: none; \
            color: #a728e5; \
            background: #f5f5f5; \
            border-width: 1px; \
            border-color: #DDD; \
            border-style: solid; \
        } \
        .pagination-weekly:before { \
            font-size: 20px; \
            font-family: Arial; \
            position: relative; \
        } \
        .pagination-weekly:hover { \
            background: #a728e5; \
            color: #EEE; \
        } \
        .pagination-weekly-prev { \
            left: 0; \
        } \
        .pagination-weekly-prev.n00 { \
            display: none; \
        } \
        .pagination-weekly-prev:before { \
            content: "\\02C2"; \
            top: 7px; \
            left: 10px; \
        } \
        .pagination-weekly-next { \
            right: 0; \
        } \
        .pagination-weekly-next:before { \
            content: "\\02C3"; \
            top: 6px; \
            left: 12px; \
        } \
    '.replace(/\s]/g, '');

    $head.appendChild($style);
}(document, window));