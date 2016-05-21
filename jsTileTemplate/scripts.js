$(document).ready(function() {
	setGoTop();
	toggleGoTop();
	// デバイス幅がxs（768px以下）なら、スマホ版のタイル配置にする
    var w = $(window).width();
    var x = 768;
    if (w <= x) {
		var myPCTemplate = {
			tempD: {
				tilesNum: 11,
			}
		};    	
    }
    else {
		var myPCTemplate = {
			tempD: {
				tilesNum: 11,
				columns: {
					0: {
						colClass: 'tl-col col-xs-12 col-sm-9 col-md-9',
						start: '0',
						end: '4'
					},
					1: {
						colClass: 'tl-col col-xs-12 col-sm-3 col-md-3',
						start: '5',
						end: '6'
					}
				},
				tiles: {
					0: 'col-xs-12 col-sm-12 col-md-12',
					1: 'col-xs-12 col-sm-5 col-md-5',
					2: 'col-xs-12 col-sm-7 col-md-7',
					3: 'col-xs-12 col-sm-7 col-md-7',
					4: 'col-xs-12 col-sm-7 col-md-7',
					5: 'col-xs-12 col-sm-12 col-md-12',
					6: 'col-xs-12 col-sm-12 col-md-12',
					7: 'col-xs-12 col-sm-4 col-md-3',
					8: 'col-xs-12 col-sm-4 col-md-3',
					9: 'col-xs-12 col-sm-4 col-md-3',
					10: 'col-xs-12 col-sm-4 col-md-3',
				},
				animations: {
					0: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:50},
					1: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:700},
					2: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:200},
					3: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:200},
					4: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:200},
					5: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:250},
					6: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:500},
					7: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:200},
					8: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:200},
					9: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:200},
					10: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:200},
				},
				config: {
					0: { ratio: '0.3'},
					1: { ratio: '1.46'},
					2: { ratio: '0.33'},
					3: { ratio: '0.33'},
					4: { ratio: '0.33'},
					5: { ratio: '1.39'},
					6: { ratio: '1.39'},
					7: { ratio: '1.5'},
					8: { ratio: '1.5'},
					9: { ratio: '1.5'},
					10: { ratio: '1.5'},
				}
			}
		};    	
    }
	var opt = {
		templateObj: myPCTemplate
	};
	$('#tiles-container').jstiles(opt);	
	
	// Exapmples ----------------------------------------- //
	// #1
	var temp1 = {
		myTemplate: {
			tilesNum: 4,
			tiles: {
				0: 'col-xs-12 col-md-6',
				1: 'col-xs-12 col-md-6',
				2: 'col-xs-12 col-md-6',
				3: 'col-xs-12 col-md-6'
			}
		}
	};
	var opt1 = {
		templateObj: temp1	
	};
	$('#live1').jstiles(opt1);
	
	// #2
	var temp2 = {
		myTemplate: {
			tilesNum: 4,
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3'
			}
		}
	};
	var opt2 = {
		templateObj: temp2	
	};
	$('#live2').jstiles(opt2);

	// #3
	var temp3 = {
		myTemplate: {
			tilesNum: 8,
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			}
		}
	};
	var opt3 = {
		templateObj: temp3
	};
	$('#live3').jstiles(opt3);
	
	// #4
	var temp4 = {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			}
		}
	};
	var opt4 = {
		templateObj: temp4
	};
	$('#live4').jstiles(opt4);
	
	// #6
	var temp6 = {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:150 },
				1: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:50 },
				2: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:150 },
				3: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:250 },
				4: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:550 },
				5: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:100 },
				6: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:400 },
				7: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:350 }	
			},
			config: {
				0: {
					padding: '30px',
					ratio: 1
				}
			}
		}
	};
	var opt6 = {
		templateObj: temp4
	};
	$('#live6').jstiles(opt6);
	$('#live7').jstiles(opt6);
	
});

var animObj = {
	5: {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:150 },
				1: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:50 },
				2: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:150 },
				3: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:250 },
				4: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:550 },
				5: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:100 },
				6: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:400 },
				7: { tlClass:'tl-scale', tlClassF:'tl-scale-up', tlDelay:350 }	
			}
		}
	},
	8: {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:150 },
				1: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:50 },
				2: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:150 },
				3: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:150 },
				4: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:250 },
				5: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:550 },
				6: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:150 },
				7: { tlClass:'tl-fade', tlClassF:'tl-fade-in', tlDelay:350 }
			}
		}
	},
	9: {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:150 },
				1: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:50 },
				2: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:150 },
				3: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:150 },
				4: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:250 },
				5: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:550 },
				6: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:150 },
				7: { tlClass:'tl-slide-up', tlClassF:'tl-slide-up-f', tlDelay:350 }
			}
		}
	},
	10: {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:150 },
				1: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:50 },
				2: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:150 },
				3: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:150 },
				4: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:250 },
				5: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:550 },
				6: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:150 },
				7: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:350 }
			}
		}
	},
	11: {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:150 },
				1: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:50 },
				2: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:150 },
				3: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:150 },
				4: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:250 },
				5: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:550 },
				6: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:150 },
				7: { tlClass:'tl-slide-left', tlClassF:'tl-slide-left-in', tlDelay:350 }
			}
		}
	},
	12: {
		myTemplate: {
			tilesNum: 8,
			rows: {
				0: {
					rowClass: 'tl-row col-xs-12',
					start: '4',
					end: '7'
				}
			},
			columns: {
				0: {
					colClass: 'tl-col col-xs-12 col-md-9',
					start: '0',
					end: '2'
				}
			},
			tiles: {
				0: 'col-xs-12 col-md-7',
				1: 'col-xs-12 col-md-2',
				2: 'col-xs-12 col-md-5',
				3: 'col-xs-12 col-md-3',
				4: 'col-xs-12 col-md-3',
				5: 'col-xs-12 col-md-3',
				6: 'col-xs-12 col-md-3',
				7: 'col-xs-12 col-md-3'
			},
			animations: {
				0: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:150 },
				1: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:50 },
				2: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:150 },
				3: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:150 },
				4: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:250 },
				5: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:550 },
				6: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:150 },
				7: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:350 }
			}
		}
	}
}
	
$('[id^=load_live_]').on('click', function() {
	var num = $(this).attr('id').replace('load_live_','');
	var opt = {
		templateObj: animObj[num]
	};
	var sel = $('#live' + num);
	sel.jstiles('destroy');
	sel.jstiles(opt);
});

$('#destroy').on('click', function() {
	$('#tiles-container').jstiles('destroy');
});

var setGoTop = function() {
	var gt = $('#goTop');
	var w = $(window).width();
	var mw = $('#contentNarrow').outerWidth();
	var gtw = gt.outerWidth();
	var r = ((parseFloat(w) - parseFloat(mw)) / 2) - parseFloat(gtw) - 5;
	gt.css({'right': r + 'px'});
}
var toggleGoTop = function() {
	var gt = $('#goTop');
	var t = $(window).scrollTop();
	if (t > 200) {
		gt.show();
	} else {
		gt.hide();
	}
}

$(document).on('click', '.innerAnchor', function(e) {
	e.preventDefault();
	var href = $(this).attr('href');
	var target = $(href);
	var scroll = parseFloat(target.offset().top);
	$('html, body').animate({scrollTop: scroll + 'px'}, 450, 'easeInOutExpo');
});

$('#goTop, #goTopLi').on('click', function() {
	$('body,html').animate({scrollTop:0},350,'easeOutExpo');	
});

$(window).resize(function() {
	setGoTop();
});
$(window).scroll(function() {
	toggleGoTop();
});
$(".jstile").click(function(){
    window.location=$(this).find("a").attr("href");
    return false;
});
