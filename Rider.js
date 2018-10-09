
public class Rider {
	String user; //Unique, primary identifier
	String first;
	String last;
	String email;
	//password
	//AND - location city;
	
	function Rider(String f, String l) { // constructor
		this.first = f;
		this.last = l;
		//user - must be unique - we generate
	}
	
	function getName() {
		return first + " " + last;
		}
	
	//public String genUsername() {
	//}

	
//tests on the rider class	
//public static void main(String[] args) {
//	Rider Tate = new Rider("Tate", "DeVito");{ // note object setup
//	}		
//	System.out.println(Tate.getName());		
//}

}
