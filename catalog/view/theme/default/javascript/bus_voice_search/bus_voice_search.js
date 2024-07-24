/*  Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
	© 2016-2021; BuslikDrev - Усе правы захаваныя.
	Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ ) */
/*
Ly9odHRwczovL292ZXJjb2Rlci5uZXQvcS80NTkzNjAvJUQxJTgwJUQwJUIwJUQxJTgxJUQwJUJGJUQwJUJFJUQwJUI3JUQwJUJEJUQwJUIwJUQwJUIyJUQwJUIwJUQwJUJEJUQwJUI4JUQwJUI1LSVEMSU4MCVEMCVCNSVEMSU4NyVEMCVCOC0lRDAlQjItJUQxJTgwJUQwJUI1JUQwJUIwJUQwJUJCJUQxJThDJUQwJUJEJUQwJUJFJUQwJUJDLSVEMCVCMiVEMSU4MCVEMCVCNSVEMCVCQyVEMCVCNSVEMCVCRCVEMCVCOC0lRDElODEtJUQwJUI4JUQxJTgxJUQwJUJGJUQwJUJFJUQwJUJCJUQxJThDJUQwJUI3JUQwJUJFJUQwJUIyJUQwJUIwJUQwJUJEJUQwJUI4JUQwJUI1JUQwJUJDLXdlYnJ0Yy1ub2RlanMtJUQwJUI4DQovL2h0dHBzOi8vdHByb2dlci5ydS9hcnRpY2xlcy9zcGVlY2gtcmVjb2dpbml0aW9uLWluLXRoZS1icm93c2VyLw0KLy9odHRwczovL2dpdGh1Yi5jb20vY29tcHVsaW0vd2ViLXNwZWVjaC1jb2duaXRpdmUtc2VydmljZXMNCi8vaHR0cHM6Ly9jb21wdWxpbS5naXRodWIuaW8vd2ViLXNwZWVjaC1jb2duaXRpdmUtc2VydmljZXMvDQovL2h0dHBzOi8vbXJzYW1vLmdpdGh1Yi5pby9zaHJpLTIwMTgtbXVsdGltZWRpYS1hdWRpby8=
*/

var busVoiceSearch = {
	'setting':{
		'lang-browser':false,
		lang:(document.documentElement.lang || window.localStorage.getItem('language')),
		lg:true,
		md:true,
		sm:true,
		xs:true,
		col:'lg',
		ids: ['header input[name="search"]'],
		button:function(element, id, selector) {
			if (id == 0) {
				var new_element = document.createElement('span');
				new_element.id = 'bus-voice-search';
				new_element.innerHTML = '<i class="fa-light fa-microphone"></i>';
				new_element.style['position'] = 'absolute';
				new_element.style['padding'] = '10px';
				new_element.style['right'] = '80px';
				new_element.style['cursor'] = 'pointer';
				new_element.style['color'] = 'rgb(119, 119, 119)';
				new_element.style['z-index'] = 2;
				element.parentNode.insertBefore(new_element, element.nextSibling);

				return [element, new_element];
			}
		},
		buttonHtmlOn:'<i class="fa-light fa-circle"></i>',
		buttonHtmlOff:'<i class="fa-light fa-microphone-slash"></i>',
		'button-html-on':'<i class="fa-light fa-circle"></i>',
		'button-html-off':'<i class="fa-light fa-microphone-slash"></i>',
		debug:false,
	},
	'status':false,
	'start':function(busVoiceSearchSetting) {
		if (!busVoiceSearch.setting['lang']) {
			if (busVoiceSearch.getCookie('language')) {
				busVoiceSearch.setting['lang'] = busVoiceSearch.getCookie('language');
			} else {
				busVoiceSearch.setting['lang'] = 'ru-RU';
				busVoiceSearch.setting['lang'] = 'uk-UA';
			}
		}

		busVoiceSearch.status = true;
		var status = false;

		if (typeof busVoiceSearchSetting === 'undefined' || typeof busVoiceSearchSetting !== 'object') {
			busVoiceSearchSetting = busVoiceSearch.setting;
		} else {
			for (var i in busVoiceSearchSetting) {
				busVoiceSearch.setting[i] = busVoiceSearchSetting[i];
			}
		}

		if (typeof window.CustomEvent !== 'function') {
			window.CustomEvent = function(event, params) {
				params = params || {bubbles:false, cancelable:false, detail:null};

				var evt = document.createEvent('CustomEvent');
				evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);

				return evt;
			};
		}

		var element = new CustomEvent('busVoiceSearchBefore', {bubbles: true});
		document.dispatchEvent(element);

		if (busVoiceSearch.setting['lg'] == true && window.innerWidth >= 1200) {
			status = true;
			busVoiceSearch.setting['col'] = 'lg';
		} else if (busVoiceSearch.setting['md'] == true && window.innerWidth >= 992 && window.innerWidth <= 1199) {
			status = true;
			busVoiceSearch.setting['col'] = 'md';
		} else if (busVoiceSearch.setting['sm'] == true && window.innerWidth >= 768 && window.innerWidth <= 991) {
			status = true;
			busVoiceSearch.setting['col'] = 'sm';
		} else if (busVoiceSearch.setting['xs'] == true && window.innerWidth < 768) {
			status = true;
			busVoiceSearch.setting['col'] = 'xs';
		}

		if ('SpeechRecognition' in window) {
			SpeechRecognition = window.SpeechRecognition;
		} else if ('mozSpeechRecognition' in window) {
			SpeechRecognition = window.mozSpeechRecognition;
		} else if ('webkitSpeechRecognition' in window) {
			SpeechRecognition = window.webkitSpeechRecognition;
		} else {
			var SpeechRecognition = false;
		}

		if ('SpeechGrammarList' in window) {
			SpeechGrammarList = window.SpeechGrammarList;
		} else if ('mozSpeechGrammarList' in window) {
			SpeechGrammarList = window.mozSpeechGrammarList;
		} else if ('webkitSpeechGrammarList' in window) {
			SpeechGrammarList = window.webkitSpeechGrammarList;
		} else {
			var SpeechGrammarList = false;
		}

		if (!SpeechRecognition || !SpeechGrammarList || window.location.href.indexOf('https://') == -1) {
			status = false;
		}

		if (status == true) {
			element = new CustomEvent('busVoiceSearch', {bubbles: true});
			document.dispatchEvent(element);

			if (busVoiceSearch.setting['lang-browser'] == true) {
				busVoiceSearch.setting['lang'] = window.navigator.language || window.navigator.userLanguage;
			}

			var bus_voice_search = {};
			var bus_voice_search_set = {};
			var bus_recognition = {};
			var bus_search = {};

			for (var id in busVoiceSearch.setting['ids']) {
				bus_search[id] = document.querySelector(busVoiceSearch.setting['ids'][id]);

				if (bus_search[id]) {
					var button = busVoiceSearch.setting['button'](bus_search[id], id, busVoiceSearch.setting['ids'][id]);
					if (button && typeof button[0] !== 'undefined') {
						bus_search[id] = button[0];
					}
					if (button && typeof button[1] !== 'undefined') {
						bus_voice_search[id] = button[1];
					} else {
						bus_voice_search[id] = document.createElement('span');
						bus_voice_search[id].id = 'bus-voice-search-' + id;
						bus_voice_search[id].innerHTML = '<i class="fa-light fa-microphone"></i>';
						bus_voice_search[id].style['position'] = 'absolute';
						bus_voice_search[id].style['padding'] = '10px';
						bus_voice_search[id].style['right'] = '20%';
						bus_voice_search[id].style['cursor'] = 'pointer';
						bus_voice_search[id].style['color'] = 'black';
						bus_voice_search[id].style['z-index'] = 2;
						bus_search[id].parentNode.insertBefore(bus_voice_search[id], bus_search[id].nextSibling);
					}

					bus_voice_search[id].setAttribute('data-id', id);
					bus_voice_search_set[id] = {};
					bus_voice_search_set[id]['status'] = true;
					bus_voice_search_set[id]['html'] = bus_voice_search[id].innerHTML;
					bus_voice_search_set[id]['color'] = bus_voice_search[id].style['color'];

					bus_voice_search[id].addEventListener('click', function(e) {
						var element = e.target;
						if (element.getAttribute('data-id') === null) {
							element = element.parentNode;
						}
						if (element) {
							var id = element.getAttribute('data-id');

							if ('mediaDevices' in window.navigator && 'getUserMedia' in window.navigator.mediaDevices) {
								window.navigator.mediaDevices.getUserMedia({audio:true, video:false}).then(function(stream) {
									// microphone available
								}).catch(function(err) {
									element.innerHTML = busVoiceSearch.setting['button-html-off'];
									element.style['color'] = 'red';

									if (busVoiceSearch.setting['debug'] == true) {
										console.log('Микрофон запрещён или его нет -----------------------------');
										console.log(err);
									}
								});
							}

							if ('permissions' in window.navigator && 'query' in window.navigator.permissions) {
								window.navigator.permissions.query({name:'microphone'}).then(function(stream) {
									if (stream.state != 'granted' && stream.state != 'prompt') {
										element.innerHTML = busVoiceSearch.setting['button-html-off'];
										element.style['color'] = 'red';

										if (busVoiceSearch.setting['debug'] == true) {
											console.log('Микрофон запрещён или его нет -----------------------------');
											console.log(stream);
										}
									}
								});
							}

							var colors = {
								красный: 'red',
								оранжевый: 'orange',
								желтый: 'yellow',
								зеленый: 'green',
								голубой: 'blue',
								синий: 'darkblue',
								фиолетовый: 'violet'
							};

							bus_recognition[id] = new SpeechRecognition();
							//var bus_grammars = new SpeechGrammarList();
							//bus_grammars.addFromString('#JSGF V1.0; grammar colors; public <color> = ' + Object.keys(colors).join(' | ') + ' ;', 1);
							//bus_recognition[id].grammars = bus_grammars;
							bus_recognition[id].lang = busVoiceSearch.setting['lang'];
							bus_recognition[id].interimResults = false;
							bus_recognition[id].maxAlternatives = 1;

							if (bus_voice_search_set[id]['status'] == true) {
								bus_recognition[id].start();

								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Начинаем запись принудительно -----------------------------');
									console.log('start: ');
								}
							} else {
								bus_recognition[id].stop();
								element.innerHTML = bus_voice_search_set[id]['html'];
								element.style['color'] = bus_voice_search_set[id]['color'];
								bus_voice_search_set[id]['status'] = true;

								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Заканчиваем запись принудительно -----------------------------');
									console.log('stop: ');
								}
							}

							// начинаем запись
							bus_recognition[id].onaudiostart = function(event) {
								element.innerHTML = busVoiceSearch.setting['button-html-on'];
								element.style['color'] = 'red';
								bus_voice_search_set[id]['status'] = false;

								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Начинаем запись -----------------------------');
									console.log('onaudiostart: ', event);
								}
							};

							// заканчиваем запись
							bus_recognition[id].onspeechend = function(event) {
								bus_recognition[id].stop();
								element.innerHTML = bus_voice_search_set[id]['html'];
								element.style['color'] = bus_voice_search_set[id]['color'];
								bus_voice_search_set[id]['status'] = true;

								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Заканчиваем запись -----------------------------');
									console.log('onspeechend: ', event);
								}
							};

							// получаем текстовый результат
							bus_recognition[id].onresult = function(event) {
								var last = event.results.length - 1;
								bus_search[id].value = event.results[last][0].transcript;
								bus_search[id].parentNode.querySelector('button').click();

								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Получаем текстовый результат -----------------------------');
									console.log('transcript: ', event.results[last][0].transcript);
									console.log('confidence: ', event.results[last][0].confidence);
								}
							};

							// получаем варианты результата
							bus_recognition[id].onnomatch = function(event) {
								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Получаем варианты результата -----------------------------');
									console.log('onnomatch: ', event);
								}
							};

							// ошибка записи
							bus_recognition[id].onerror = function(event) {
								bus_recognition[id].stop();
								element.innerHTML = bus_voice_search_set[id]['html'];
								element.style['color'] = bus_voice_search_set[id]['color'];
								bus_voice_search_set[id]['status'] = true;

								if (busVoiceSearch.setting['debug'] == true) {
									console.log('Ошибка записи -----------------------------');
									console.log('Error occurred in recognition: ${event.error}');
								}
							};
						}
					});
				}

				if (busVoiceSearch.setting['debug'] == true) {
					console.log('Selector ' + busVoiceSearch.setting['ids'][id] + ', id ' + id + ', elemnt: ', bus_search[id]);
					console.log('Selector ' + busVoiceSearch.setting['ids'][id] + ', id ' + id + ', elemnt.parentNode : ', bus_search[id].parentNode);
				}
			}

			element = new CustomEvent('busVoiceSearchAfter', {bubbles: true});
			document.dispatchEvent(element);
		}
	},
	getCookie:function(cname) {
		var name = cname + '=';
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');

		for (var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}

		return '';
	}
};

if (typeof busVoiceSearchSetting === 'undefined') {
	busVoiceSearchSetting = {};
}
document.addEventListener('DOMContentLoaded', function() {
	if (busVoiceSearch.status == false) {
		busVoiceSearch.start(busVoiceSearchSetting);
		delete busVoiceSearchSetting;
	}
});
window.addEventListener('load', function() {
	if (busVoiceSearch.status == false) {
		busVoiceSearch.start(busVoiceSearchSetting);
		delete busVoiceSearchSetting;
	}
});
window.onload = function() {
	if (busVoiceSearch.status == false) {
		busVoiceSearch.start(busVoiceSearchSetting);
		delete busVoiceSearchSetting;
	}
};