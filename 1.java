
import java.io.FileReader;
import java.util.List;
import org.json.simple.parser.JSONParser;
import org.json.simple.JSONObject;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author banis
 */
public class Arkademy {
    public static void main(String[] args) throws Exception {
    JSONObject jsonObject = (JSONObject) readJsonSimpleDemo("baniarkademy.json");
    System.out.println(jsonObject);
    System.out.println(jsonObject.get("age"));
}
    
public static Object readJsonSimpleDemo(String filename) throws Exception {
    FileReader reader = new FileReader(filename);
    JSONParser jsonParser = new JSONParser();
    return jsonParser.parse(reader);
}
class Person {

    Person(String name, int age, String address, List<String> hobbies, boolean isMarried,
            List<Person> kids, List<Person> skills, boolean interest_in_coding) {
        this.name = name;
        this.age = age;
        this.address = address;
        this.hobbies = hobbies;
        this.isMarried = isMarried;
        this.list_school = list_school;
        this.skills = skills;
        this.interest_in_coding = interest_in_coding;
    }

    Person(String name, String address, int age) {
        this(name, age, null, null, false, null, null, true);
    }

    private String name;
    private String address;
    private Integer age;
    private Boolean isMarried;
    private List<String> hobbies;
    private List<Person> list_school;
    private List<Person> skills;
    private Boolean interest_in_coding;

    // getters and setters

    @Override
    public String toString() {
        return "Person{" +
                "name='" + name + '\'' +
                ", age=" + age +
                "address='" + address + '\'' +
                ", isMarried=" + isMarried +
                ", hobbies=" + hobbies +
                ", list_school=" + list_school +
                ", skills=" + skills +
                ", interest_in_coding=" + interest_in_coding +
                '}';
    }
    }
}
