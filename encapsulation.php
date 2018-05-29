<!DOCTYPE html>
<html><head></head><body>

<p id="demo"> Initial content </p>	
<script>

var Disk = function (arg) {
	var r;
	function constr () {
		r = arg;
	}
	constr ();
	return {
		setR : function (value) {
			r = value;
		},
		getR : function () {
			return r;
		},
		getLength : function () {
			return 2 * 3.14 * r;
		},
		getArea : function () {
			return 3.14 * r * r;
		},
	}; // an object with an interface to r is returned
}

var Cilinder = function (r, h) {
	var base;
	var height;
	function constr () {
		base = Disk (r);
		height = h;
	}
	constr (); // the object is created and initialized

	return {
		getVolume : function () {
			return h * base.getArea();
		},
	};
}


var cili = Cilinder (3, 5);

alert (cili.getVolume ());

















</script>
</body></html>
