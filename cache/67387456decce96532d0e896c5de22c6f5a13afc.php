<?php $__env->startSection('content'); ?><h1 id="algolia-docsearch">Algolia DocSearch</h1>

<p>This starter template includes support for <a href="https://community.algolia.com/docsearch/">DocSearch</a>, a documentation indexing and search tool provided by Algolia for free. To configure this tool, you’ll need to sign up with Algolia and set your API Key and index name in <code>config.php</code>. Algolia will then crawl your documentation regularly, and index all your content.</p>

<p><a href="https://community.algolia.com/docsearch/#join-docsearch-program">Get your DocSearch credentials here.</a></p>

<pre><code class="language-php">// config.php
return [
    'docsearchApiKey' =&gt; '',
    'docsearchIndexName' =&gt; '',
];
</code></pre>

<p>Once the <code>docsearchApiKey</code> and <code>docsearchIndexName</code> values are set in <code>config.php</code>, the search field at the top of the page is ready to use.</p>

<p><img class="block m-auto" src="/assets/img/docsearch.png" alt="Screenshot of search results" /></p>

<p>To help Algolia index your pages correctly, it's good practice to add a unique <code>id</code> or <code>name</code> attribute to each heading tag (<code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, etc.). By doing so, a user will be taken directly to the appropriate section of the page when they click a search result.</p>

<hr />

<h2 id="algolia-adding-custom-styles">Adding Custom Styles</h2>

<p>If you'd like to customize the styling of the search results, Algolia exposes custom CSS classes that you can modify:</p>

<pre><code class="language-css">/* Main dropdown wrapper */
.algolia-autocomplete .ds-dropdown-menu {
  width: 500px;
}

/* Main category (eg. Getting Started) */
.algolia-autocomplete .algolia-docsearch-suggestion--category-header {
  color: darkgray;
  border: 1px solid gray;
}

/* Category (eg. Downloads) */
.algolia-autocomplete .algolia-docsearch-suggestion--subcategory-column {
  color: gray;
}

/* Title (eg. Bootstrap CDN) */
.algolia-autocomplete .algolia-docsearch-suggestion--title {
  font-weight: bold;
  color: black;
}

/* Description description (eg. Bootstrap currently works...) */
.algolia-autocomplete .algolia-docsearch-suggestion--text {
  font-size: 0.8rem;
  color: gray;
}

/* Highlighted text */
.algolia-autocomplete .algolia-docsearch-suggestion--highlight {
  color: blue;
}
</code></pre>

<hr />

<p>For more details, visit the <a href="https://community.algolia.com/docsearch/what-is-docsearch.html">official Algolia DocSearch documentation.</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_core._layouts.documentation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>