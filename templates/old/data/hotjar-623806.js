window.hjSiteSettings = window.hjSiteSettings || {
	"site_id": 623806,
	"r": 0.3389614508928571,
	"rec_value": 0.0,
	"state_change_listen_mode": "automatic",
	"record": false,
	"continuous_capture_enabled": false,
	"recording_capture_keystrokes": true,
	"anonymize_digits": false,
	"anonymize_emails": false,
	"suppress_all": false,
	"suppress_text": null,
	"suppress_location": false,
	"user_attributes_enabled": false,
	"legal_name": "",
	"privacy_policy_url": "",
	"deferred_page_contents": [],
	"record_targeting_rules": [{
		"component": "url",
		"match_operation": "simple",
		"pattern": "https://www.fosterandpartners.com/",
		"negate": false
	}],
	"feedback_widgets": [],
	"heatmaps": [],
	"polls": [],
	"integrations": {
		"optimizely": {
			"tag_recordings": false
		}
	},
	"features": ["settings.billing_v2", "feedback.widgetV2", "recordings.filter_new_user", "heatmap.continuous_capture", "funnels.disable_traffic_log_capture", "feedback.widget_telemetry", "feedback.full_screen_survey", "recordings.page_content_ws", "survey.impressions"]
};
! function(e) {
	var t = {};

	function n(o) {
		if (t[o]) return t[o].exports;
		var r = t[o] = {
			i: o,
			l: !1,
			exports: {}
		};
		return e[o].call(r.exports, r, r.exports, n), r.l = !0, r.exports
	}
	n.m = e, n.c = t, n.d = function(e, t, o) {
		n.o(e, t) || Object.defineProperty(e, t, {
			enumerable: !0,
			get: o
		})
	}, n.r = function(e) {
		"undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
			value: "Module"
		}), Object.defineProperty(e, "__esModule", {
			value: !0
		})
	}, n.t = function(e, t) {
		if (1 & t && (e = n(e)), 8 & t) return e;
		if (4 & t && "object" == typeof e && e && e.__esModule) return e;
		var o = Object.create(null);
		if (n.r(o), Object.defineProperty(o, "default", {
				enumerable: !0,
				value: e
			}), 2 & t && "string" != typeof e)
			for (var r in e) n.d(o, r, function(t) {
				return e[t]
			}.bind(null, r));
		return o
	}, n.n = function(e) {
		var t = e && e.__esModule ? function() {
			return e.default
		} : function() {
			return e
		};
		return n.d(t, "a", t), t
	}, n.o = function(e, t) {
		return Object.prototype.hasOwnProperty.call(e, t)
	}, n.p = "", n(n.s = 315)
}({
	315: function(e, t) {
		window.hjBootstrap = window.hjBootstrap || function(e, t, n) {
			var o = ["bot", "google", "headless", "baidu", "bing", "msn", "duckduckbot", "teoma", "slurp", "yandex", "phantomjs", "pingdom", "ahrefsbot"].join("|"),
				r = new RegExp(o, "i"),
				a = window.navigator || {
					userAgent: "unknown"
				},
				i = a.userAgent ? a.userAgent : "unknown";
			if (r.test(i)) console.warn("Hotjar not launching due to suspicious userAgent:", i);
			else {
				var d = function(e, t, n) {
					window.hjBootstrapCalled = (window.hjBootstrapCalled || []).concat(n), window.hj && window.hj._init && window.hj._init._verifyInstallation && hj._init._verifyInstallation()
				};
				d(0, 0, n);
				var s, u, l, c, p = window.document,
					f = p.head || p.getElementsByTagName("head")[0];
				p.addEventListener && (hj.scriptDomain = e, (s = p.createElement("script")).async = 1, s.src = hj.scriptDomain + t, s.charset = "utf-8", f.appendChild(s), c = ["iframe#_hjRemoteVarsFrame {", "display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;", "}"], (u = p.createElement("style")).type = "text/css", u.styleSheet ? u.styleSheet.cssText = c.join("") : u.appendChild(p.createTextNode(c.join(""))), f.appendChild(u), (l = p.createElement("iframe")).style.cssText = c[1], l.name = "_hjRemoteVarsFrame", l.title = "_hjRemoteVarsFrame", l.id = "_hjRemoteVarsFrame", l.src = "https://" + (window._hjSettings.varsHost || "vars.hotjar.com") + "/box-5e3cec51ed8e99df6977c199d27812d7.html", l.onload = function() {
					d.varsLoaded = !0, "undefined" != typeof hj && hj.event && hj.event.signal("varsLoaded")
				}, d.varsJar = l, "interactive" === p.readyState || "complete" === p.readyState || "loaded" === p.readyState ? h() : p.addEventListener("DOMContentLoaded", h), d.revision = "c814b79e7ad5", window.hjBootstrap = d)
			}

			function h() {
				setTimeout(function() {
					p.body.appendChild(l)
				}, 50)
			}
		}, window.hjBootstrap("https://script.hotjar.com/", "modules.af7c72981a16dda10558.js", "623806")
	}
});
