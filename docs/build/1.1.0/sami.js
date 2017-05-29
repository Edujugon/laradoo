
window.projectVersion = '1.1.0';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:Edujugon" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon.html">Edujugon</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Edujugon_Laradoo" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/Laradoo.html">Laradoo</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Edujugon_Laradoo_Facades" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/Laradoo/Facades.html">Facades</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_Laradoo_Facades_Odoo" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/Laradoo/Facades/Odoo.html">Odoo</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Edujugon_Laradoo_Providers" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Edujugon/Laradoo/Providers.html">Providers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Edujugon_Laradoo_Providers_OdooServiceProvider" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Edujugon/Laradoo/Providers/OdooServiceProvider.html">OdooServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Edujugon_Laradoo_Odoo" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Edujugon/Laradoo/Odoo.html">Odoo</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "Edujugon.html", "name": "Edujugon", "doc": "Namespace Edujugon"},{"type": "Namespace", "link": "Edujugon/Laradoo.html", "name": "Edujugon\\Laradoo", "doc": "Namespace Edujugon\\Laradoo"},{"type": "Namespace", "link": "Edujugon/Laradoo/Facades.html", "name": "Edujugon\\Laradoo\\Facades", "doc": "Namespace Edujugon\\Laradoo\\Facades"},{"type": "Namespace", "link": "Edujugon/Laradoo/Providers.html", "name": "Edujugon\\Laradoo\\Providers", "doc": "Namespace Edujugon\\Laradoo\\Providers"},
            
            {"type": "Class", "fromName": "Edujugon\\Laradoo\\Facades", "fromLink": "Edujugon/Laradoo/Facades.html", "link": "Edujugon/Laradoo/Facades/Odoo.html", "name": "Edujugon\\Laradoo\\Facades\\Odoo", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\Laradoo\\Facades\\Odoo", "fromLink": "Edujugon/Laradoo/Facades/Odoo.html", "link": "Edujugon/Laradoo/Facades/Odoo.html#method_getFacadeAccessor", "name": "Edujugon\\Laradoo\\Facades\\Odoo::getFacadeAccessor", "doc": "&quot;Get the registered name of the component.&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\Laradoo", "fromLink": "Edujugon/Laradoo.html", "link": "Edujugon/Laradoo/Odoo.html", "name": "Edujugon\\Laradoo\\Odoo", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method___construct", "name": "Edujugon\\Laradoo\\Odoo::__construct", "doc": "&quot;Create a new Odoo instance&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_connect", "name": "Edujugon\\Laradoo\\Odoo::connect", "doc": "&quot;Login to Odoo ERP.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_can", "name": "Edujugon\\Laradoo\\Odoo::can", "doc": "&quot;Check access rights on a model.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_where", "name": "Edujugon\\Laradoo\\Odoo::where", "doc": "&quot;Set condition for search query&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_limit", "name": "Edujugon\\Laradoo\\Odoo::limit", "doc": "&quot;Limit helps to only retrieve a subset of all matched records\nsecond parameter, offset to start from that value.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_fields", "name": "Edujugon\\Laradoo\\Odoo::fields", "doc": "&quot;Set fields to retrieve.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_search", "name": "Edujugon\\Laradoo\\Odoo::search", "doc": "&quot;Get the ids of the models.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_count", "name": "Edujugon\\Laradoo\\Odoo::count", "doc": "&quot;Count the items in a model&#039;s table.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_get", "name": "Edujugon\\Laradoo\\Odoo::get", "doc": "&quot;Get a list of records.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_version", "name": "Edujugon\\Laradoo\\Odoo::version", "doc": "&quot;Retrieve Odoo version.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_fieldsOf", "name": "Edujugon\\Laradoo\\Odoo::fieldsOf", "doc": "&quot;Get a collection of fields of a model table.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_create", "name": "Edujugon\\Laradoo\\Odoo::create", "doc": "&quot;Create a single record and return its database identifier.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_update", "name": "Edujugon\\Laradoo\\Odoo::update", "doc": "&quot;Update one or more records.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_deleteById", "name": "Edujugon\\Laradoo\\Odoo::deleteById", "doc": "&quot;Remove a record by Id or Ids.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_delete", "name": "Edujugon\\Laradoo\\Odoo::delete", "doc": "&quot;Remove one or a group of records.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_call", "name": "Edujugon\\Laradoo\\Odoo::call", "doc": "&quot;Run execute_kw call with provided params.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_getClient", "name": "Edujugon\\Laradoo\\Odoo::getClient", "doc": "&quot;Get a XML-RPC client&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_host", "name": "Edujugon\\Laradoo\\Odoo::host", "doc": "&quot;Set host&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_username", "name": "Edujugon\\Laradoo\\Odoo::username", "doc": "&quot;Set username&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_password", "name": "Edujugon\\Laradoo\\Odoo::password", "doc": "&quot;Set password.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_db", "name": "Edujugon\\Laradoo\\Odoo::db", "doc": "&quot;Set db name.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_apiSuffix", "name": "Edujugon\\Laradoo\\Odoo::apiSuffix", "doc": "&quot;Set API suffix.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_getUid", "name": "Edujugon\\Laradoo\\Odoo::getUid", "doc": "&quot;Get the Odoo user identifier&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_getHost", "name": "Edujugon\\Laradoo\\Odoo::getHost", "doc": "&quot;Get host&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_getDb", "name": "Edujugon\\Laradoo\\Odoo::getDb", "doc": "&quot;Get db&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_getUserName", "name": "Edujugon\\Laradoo\\Odoo::getUserName", "doc": "&quot;Get username&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Odoo", "fromLink": "Edujugon/Laradoo/Odoo.html", "link": "Edujugon/Laradoo/Odoo.html#method_getPassword", "name": "Edujugon\\Laradoo\\Odoo::getPassword", "doc": "&quot;Get password&quot;"},
            
            {"type": "Class", "fromName": "Edujugon\\Laradoo\\Providers", "fromLink": "Edujugon/Laradoo/Providers.html", "link": "Edujugon/Laradoo/Providers/OdooServiceProvider.html", "name": "Edujugon\\Laradoo\\Providers\\OdooServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Edujugon\\Laradoo\\Providers\\OdooServiceProvider", "fromLink": "Edujugon/Laradoo/Providers/OdooServiceProvider.html", "link": "Edujugon/Laradoo/Providers/OdooServiceProvider.html#method_boot", "name": "Edujugon\\Laradoo\\Providers\\OdooServiceProvider::boot", "doc": "&quot;Bootstrap the application services.&quot;"},
                    {"type": "Method", "fromName": "Edujugon\\Laradoo\\Providers\\OdooServiceProvider", "fromLink": "Edujugon/Laradoo/Providers/OdooServiceProvider.html", "link": "Edujugon/Laradoo/Providers/OdooServiceProvider.html#method_register", "name": "Edujugon\\Laradoo\\Providers\\OdooServiceProvider::register", "doc": "&quot;Register the application services.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


