<?php
    require_once 'services.php';
    $shareURL = urlencode("http://bit.ly/seo-friendly-social-links");
    $shareMessage = urlencode("I'm using the http://bit.ly/seo-friendly-social-links #Wordpress plugin by @AllThingsSEOcom.");
?>
<style type="text/css">
.seoCheckbox {
    margin-left: 15px;
}

.postbox {
    width: 100px;
}

.postbox a {
    text-decoration: none;
}

.postbox li {
    list-style-image: none;
}
</style>
<form method="post" action="options.php">
    <div id="icon-options-general" class="icon32"><br /></div>
    <h2>SEO friendly Social Links&nbsp;<span style="font-family: Georgia, 'Times New Roman', 'Bitstream Charter', Times, serif;font-size: 11px;">proudly powered by <a href="http://www.all-things-seo.com" target="_blank">all-things-seo.com</a>.</span></h2>
    <table class="form-table">
            <tr valign="top">
                <th scope="row">Select Services</th>
                <td><p><?php
                    foreach ($seoServices as $service) {
                        $selected = in_array($service->name, get_option('selectedSEOfriendlyLinks'))? " checked": "";
                        echo "<span style=\"display: inline-block\"><input name=\"selectedSEOfriendlyLinks[]\" type=\"checkbox\" class=\"seoCheckbox\" value=\"".$service->name."\"$selected />&nbsp;".$service->name ."</span>";
                    }
                ?></p>
                <p>See <code><?=dirname(__FILE__);?>/customServices_example.php</code> for details about how to add your own services.</p>
                </td>
                <td rowspan="6">
                    <div class="postbox">
                        <div style="padding: 8px;">
                            <ul style="font-size:0.9em">
                                <li><a href="http://twitter.com/AllThingsSEOcom" target="_blank" rel="_nofollow"><span style="background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAIAAADZF8uwAAAAAXNSR0IArs4c6QAAAURJREFUeJxkkDtLA0EUhc9s1iRuInamCJYBC0ETawt/iJbW+ju0sBARezuxs5GAjSC+ah+FigRThLia7IOdmXvHmd0UiofLZZj5OPfMFWdvYbf3NVUqASBAMzJGnFeiEQt/Y2FObN8PatNBJQgaZcxXcD3CUCMijDVGtkuO+u8+/DKqgTRYb6DqwQAnA0Q58a2hjKFk7Ftzj92bJazqJTQrSHzEhJtQGdJGKz9haIIxKLQ666rQ7gsfv2eW86Lc9lPjv5yNks7JBjQakicPRz06fE2LKa4z2YNnA4YKI0UF1Kpyp0adOq/MoI4cZcLyRdi5ytqX8a2N+VcHD8PF0+fW/rnHWrrBSu48jT9S+p3pMUzdOMNiqTso/jYJQRpEboS9tEtKYzXs+5tNsde9Y5nlBIHt0mx3BISw9NZa+wcAAP//AwCzbPKFHoCbQQAAAABJRU5ErkJggg%3D%3D);display: inline-block;width: 12px;height: 12px;">&nbsp;</span>
                                Follow me</a> on Twitter</li>
                                <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=N5ZQ9HWT395UC" target="_blank"><span style="background: url(data:image/gif;base64,R0lGODdhDAAMAPZpAE9ih0RXfzhNd1NliaCpvRkxYSM5aFJjiDZKdV5vkbC4yWN0lbC5yRMsXVpsjixBbn6JpfT1+NLW4IiUrfX1+N/i6Vxtjy9EcIqVrqy1xq61x2JzlP38/e/v86OsvwYhVcTI1Y+bsg0nWjVLdTtQeYCMqMrP2/Hz9lBhhn+NqIaUrSxDb+Xm7PX2+MvQ21tsjr/F09DT3W18m19vkQASSik/bFZni1FjiLa8zCI6aC1Db2N0lFdojM3R3HiFopukusHG1A0oWjhOeMfM2ENVfWVzlLS7y/b2+H+MpytAbPPz9khbgU1fhOLk632KphUtXhkxYhUuXnGAnv79/TtPeNrc5ejr8Gh3mGl4l01ehISPqhQtXsXK17O6yvL09zFHcnmGoxw0Yz5Se/Ly9bzC0B83ZT9TfNnc5P////z8/QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAADAAMAAAHhIBoaCUjQgIkLzCCgkc6SykqTgEiCosSUS5oMRFoM1Rpgh5lLUA0RWg/SVpWaFgBaF0oJmgDWUQhaQI+aBRKZztBIDZXTVA4HEwGTytkUw8TRmEdVQ0YQ2MsPDkVYB8HCDU9FmIFX1xoBFIbCxoEW0gMJ4toCWYQFw7zgl4yAzcAGfQFAgA7);width: 12px;height: 12px;display: inline-block;">&nbsp;</span>
                                Donate</a> via PayPal</li>
                                <li><a href="http://wordpress.org/tags/seo-friendly-social-links?forum_id=10" target="_blank"><span style="background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAMAAABhq6zVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAVNQTFRF////d5etSXaVucreBjFl2+Xu2+Pp0tre9fb46/D0fJyzsMPVb4ygrsHPtMHM9fn7ssDMNmaHR3aXFUlzAy9sJGKN///+i6m1ssfXZIuntcrUX4mr+/n5d5q0jqe4vcvUHF2PvMPKhqK25OnufKO+DT5yf520gZmx5/LuTnmZ5ezwu8bN4/X4u87cKnmxf6zHt8vYj7bUS3WUk6nBxNHctMLRMmaMzdnhKWSOK1x+4efrqsTVCjhs2+Lnt8rVUnWTwtDc5uvwprzQ6O3yGlJ5o7fGlbjKprjNKmuaucjS4uTlr8XYbpm4wNfnTHKPr8LTrrrGl7jNsMHQprPR4/DznbjLr8XXUneUb46kOXGaoLTFz8/Y5+vwIWiepsTZzdbcSoCnvtPbvMrVusrfprzPgpyvqrTAo7jNp7K9lrTKOGmNjZ+vt8DKy9TdGk502uXs////sQTznwAAAHF0Uk5T/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wApTMBlAAAAmklEQVQIW2MoKCjQSnZyZw4BMhgKCvyjxFX03YxTQBzfbCZRhVg9Qy/uAgbnXPYsIU9ejziGaB0G73gGJRs2BosEfo1ghjAeK1sWSQZGVQmDdAYp+1QGFyMGeWE1riCGRPU8BjnBJI6IcFltBk5rSwcxTTMGE79QR4YCxUxXhkiRfJnAHJClpnasPtK65gFgFxTECGSk8SkDGQCfICLJpzbtpwAAAABJRU5ErkJggg%3D%3D);display: inline-block;width: 12px;height: 12px;">&nbsp;</span>
                                Support</a> board</li>
                                <li>Visit <a href="http://www.all-things-seo.com/" target="_blank">All-Things-SEO.com</a></li>
                                <li><a href="http://www.all-things-seo.com/feed/" target="_blank" rel="_nofollow"><span style="background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHwSURBVHjaHJLPS1RRHMU/99437z1nfEmTNNkwRf4oBUPINtWisMA2BS3DTbjKaBlBq/4Co1oXtGkbgQoRCBFBtZOCNMIcyYacVJ7NjL15c9+73dfuu/mec/icI4wxrN8+aXTUQEoHkcQInYAC6TggBJAivQLlx8tCVGdGzN+9Jt6pyxTPXCXdXsPUVzA738jtVckV8ijfRaqEzaVdHB3WET0H8CqDuIcHEMfGcHsrmPAn8dJzVPUVUv9BuD56ZxlH5RxUlyJamqP+9TVStHH6BgnOTtN94S56dQzz8RGivYtQOWSWMU0j8qMT9E09oHhxBjcJaSzcYevNQ9TAJOLIeZLwF5g0ewC30AXJLlH4A29kkuL1ZwRD54jezdL4PIcavoZ2ejGdjgUjJIXAxavOE7+cpv70Cs3Vt3RP3MffXyFcnEXnS1Aax2hLLrE22kSo0gmC/tPk4xo78/dI0gR/fJpO+Bvd3MbsG8AogWy3NVFQpvvGAt7UAn55DNnYpLX2AW/okpUMbBcSeXAYHB+H1ObKKbIC/5eUCDyl6KwswvonZBTTfP+CZGODtG1LXb85aHqOW6vSKLmMWO0L7VaM1i66pe1t6MRWt7WHH9glZMobt/qN3qplwKyt3YSFZ5KEzNRkt05xioc4+uS7+CfAAJuxz+d4SoyCAAAAAElFTkSuQmCC);display: inline-block;width: 12px;height: 12px;">&nbsp;</span>
                                Subscribe</a> to the feed</li>
                            </ul>
                            <p style="font-size:0.9em;">Please suggest new services on the support board when you're missing an important.</p>
                        </div>
                    </div>
                    <div class="postbox">
                        <div style="padding: 8px;">
                            <p style="font-size:0.9em;">Share a link to this Wordpress plugin with others on:</p>
                            <ul style="font-size:0.9em;">
                                <li style="display: inline;"><a href="http://twitter.com/share?text=<?=$shareMessage;?>&amp;url=<?=$shareURL;?>" target="_blank">Twitter</a>,</li>
                                <li style="display: inline;"><a href="http://www.facebook.com/sharer.php?u=<?=$shareURL;?>&amp;t=<?=$shareMessage;?>" target="_blank">Facebook</a>,</li>
                                <li style="display: inline;"><a href="http://www.google.com/buzz/post?url=<?=$shareURL;?>" target="_blank">Buzz</a>,</li>
                                <li style="display: inline;"><a href="http://reddit.com/submit?url=<?=$shareURL;?>&amp;title=<?=$shareMessage;?>" target="_blank">reddit</a>,</li>
                                <li style="display: inline;"><a href="http://www.delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url=<?=$shareURL;?>&amp;title=<?=$shareMessage;?>" target="_blank">Delicious</a>,</li>
                                <li style="display: inline;"><a href="http://www.stumbleupon.com/submit?url=<?=$shareURL;?>&amp;title=<?=$shareMessage;?>" target="_blank">StumbleUpon</a>,</li>
                                <li style="display: inline;"><a href="http://digg.com/submit?url=<?=$shareURL;?>&amp;title=<?=$shareMessage;?>" target="_blank">digg</a>,</li>
                                <li style="display: inline;"><a href="http://www.mister-wong.de/index.php?action=addurl&amp;bm_url=<?=$shareURL;?>&amp;bm_description=<?=$shareMessage;?>" target="_blank">Mr. Wong</a></li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Link Delimeter</th>
                <td><p>
                        <input type="text" name="delimeterSEOfriendlyLinks" value="<?php echo htmlentities(get_option('delimeterSEOfriendlyLinks')); ?>" /><br />HTML allowed, the link delimeter is inserted in between each link <br />(e.g. " | " will result in <a name="link1">Link1</a> | <a name="link2">Link2</a> | <a name="link3">Link3</a>).
                    </p>
                </td>
            </tr><tr>
                <th scope="row">Links Prefix</th>
                <td><p>
                        <input type="text" size="50" name="prefixSEOfriendlyLinks" value="<?php echo htmlentities(get_option('prefixSEOfriendlyLinks')); ?>" /><br />HTML allowed
                    </p>
                </td>
            </tr><tr>
                <th scope="row">Links Postfix</th>
                <td><p>
                        <input type="text" size="50" name="postfixSEOfriendlyLinks" value="<?php echo htmlentities(get_option('postfixSEOfriendlyLinks')); ?>" /><br />HTML allowed
                    </p>
                </td>
            </tr><tr>
                <th scope="row">Insert Links</th>
                <td><p>Insert links <select name="methodSEOfriendlyLinks">
                            <option value="auto"<?=(get_option('methodSEOfriendlyLinks')=="auto")?" selected":"";?>>automatically</option>
                            <option value="manual"<?=(get_option('methodSEOfriendlyLinks')=="manual")?" selected":"";?>>manually</option>
                        </select>. If they are inserted automatically, I want them to be at the <select name="positionSEOfriendlyLinks">
                            <option value="beginning"<?=(get_option('positionSEOfriendlyLinks')=="beginning")?" selected":"";?>>beginning</option>
                            <option value="ending"<?=(get_option('positionSEOfriendlyLinks')=="ending")?" selected":"";?>>ending</option>
                        </select> of each post.</p>
                    <p>If you choose to insert the links by yourself modify your theme and add the following code:</p>
                    <p><code>&lt;?php if (function_exists('the_seo_friendly_links')) {<br />
                        &nbsp;&nbsp;&nbsp;echo the_seo_friendly_links();<br /> }?&gt;</code></p>
                </td>
            </tr><tr>
                <th scope="row">RSS/Atom Feed</th>
                <td><p><?php $checked = get_option('feedSEOfriendlyLinks')?" checked":"";
                        ?>
                        <input type="checkbox" name="feedSEOfriendlyLinks"<?=$checked;?> /> Insert the links in the RSS/Atom feed at the end of each post.
                    </p>
                </td>
            </tr>
    </table>
    
    <p class="submit">
        <input type="submit" class="button-primary" value="Save Changes" />
        <input type="reset" class="button" value="Reset" />
    </p>
    <?php wp_nonce_field('update-options'); ?>
    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="selectedSEOfriendlyLinks,delimeterSEOfriendlyLinks,postfixSEOfriendlyLinks,prefixSEOfriendlyLinks,methodSEOfriendlyLinks,feedSEOfriendlyLinks,positionSEOfriendlyLinks" />

</form>