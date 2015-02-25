/*
 * Copyright © 2010 - 2013 Modo Labs Inc. All rights reserved.
 *
 * The license governing the contents of this file is located in the LICENSE
 * file located at the root directory of this distribution. If the LICENSE file
 * is missing, please contact sales@modolabs.com.
 *
 */

// Initalize the ellipsis event handlers
var showPageEllipsizer;
function setupShowPageEllipsizer() {
    showPageEllipsizer = new ellipsizer();
    
    var captions = getElementsByClassName('caption');
    for (var i = 0; i < captions.length; i++) {
        var elem = captions[i];
        if (!elem) { break; }
        showPageEllipsizer.addElement(elem);
    }
}
