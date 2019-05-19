import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class AdditionSubstraction {
	static InputStreamReader isr = new InputStreamReader(System.in);
	static BufferedReader br = new BufferedReader(isr);
	
	static float firstNumber=0;
	static float secondNumber=0;
	
	public static void main(String []args) throws NumberFormatException, IOException {
		
		String rta="s";
		
		while(rta.equals("s")) {
		int opcion=option(); //Call the function option
		
			if(opcion == 1) {
				enterNumbers();
				System.out.println("El resultado es: "+addition(firstNumber,secondNumber));
			}else if(opcion == 2) {
				enterNumbers();
				System.out.println("El resultado es: "+substraction(firstNumber,secondNumber));
			}else if(opcion == 3) {
				enterNumbers();
				System.out.println("El resultado es: "+multiplication(firstNumber,secondNumber));
			}else if(opcion == 4) {
				enterNumbers();
				System.out.println("El resultado es: "+division(firstNumber,secondNumber));
			}
			else {
				System.out.println("Esta opción no es valida");
			}
			
			System.out.println("Desea hacer otra operacion? s/n");
			rta=br.readLine();
		}
		
	}

	/**
	 * Select an option
	 * @throws IOException 
	 * @throws NumberFormatException 
	 */
	static int option() throws NumberFormatException, IOException {
		System.out.println("Porfavor, elija su operación  \n 1.Suma \n 2.Resta \n 3.Multiplicacion \n 4.Division");
		int option=Integer.parseInt(br.readLine());
		return option;
	}
	
	/**
	 * This function add two numbers
	 * @param firstNumber Is the first number inserted by the user
	 * @param secondNumber Is the second number inserted by the user
	 * @return Returns the result of the addition
	 */
	static float addition(float x,float y) {
		return x+y;
	}
	
	/**
	 * this function substract two numbers
	 * @param x Is the first number inserted by the user
	 * @param y Is the second number inserted by the user
	 * @return Returns the result of the Substraction
	 */
	static float substraction(float x, float y) {
		return x-y;
	}
	
	/**
	 * This function multiply this numbers
	 * @param x first Number
	 * @param y second Number
	 * @return the product of this numbers
	 */
	static float multiplication(float x, float y) {
		return x * y;
	}
	
	/**
	 * This function divide this numbers
	 * @param x first Number
	 * @param y second Number
	 * @return the division of this numbers
	 */
	static float division(float x, float y) {
		boolean result = (x==0 || y==0)?true:false;
		if(result) {System.out.println("No se puede dividir por 0");return 0;}
		return x / y;
	}
	
	/**
	 * This function ask for two numbers to operate
	 * @throws NumberFormatException
	 * @throws IOException
	 */
	static void enterNumbers() throws NumberFormatException, IOException {
		System.out.println("Ingresa el primer numero");
		firstNumber=Float.parseFloat(br.readLine());
		System.out.println("Ingresa el segundo numero");
		secondNumber=Float.parseFloat(br.readLine());
	}
	
	

}
