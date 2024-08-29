### Application Overview
The goal of the application is to develop a Burger Comparison tool that allows users to browse, filter, and compare different burgers available in their city or postal code area. The application should display detailed information about each burger, including its ingredients, preparation methods, and associated location. Additionally, the application should provide recommendations for similar burgers and allow users to compare multiple burgers side-by-side.

### Functional Requirements

1. **Burger Listing and Filtering**:
   - Display a list of all available burgers.
   - Allow users to filter burgers based on various attributes:
     - **Attributes**: Crispy, Juicy, Cheesy, Sweet.
     - **Preparation Methods**: SousVide, Hot and Fast, Smashed, Normal, Smoked.
     - **Sauces**: Ketchup, Mayo, BBQ, Mustard, BigMac Sauce.
     - **Bun Types**: Brioche Bun, Potato Bun, Black Bun, Sesame Bun, Low Carb Bun.
     - **Meat/Vegetarian Options**: 100% Beef, Beef and Pork, Halloumi Cheese, Pear, Goat Cheese.
     - **Additional Ingredients**: Bacon, Lettuce, Tomato, Cheddar Cheese, Processed Cheese, Emmental Cheese, Onions, Caramelized Onions.

2. **Burger Detail View**:
   - Provide a detailed view of each burger, showing its full composition, including all ingredients, preparation method, sauce, bun, meat, and other attributes.
   - Display the location where the burger is available, including the location’s name and postal code.

3. **Burger Recommendations**:
   - In the detail view of a burger, display three recommended burgers from the same location.
   - The recommendations should be based on a scoring system that calculates similarity between the selected burger and others (e.g., similar ingredients, preparation methods).

4. **Burger Comparison**:
   - Allow users to select up to three burgers to compare.
   - Display a side-by-side comparison of the selected burgers, listing all attributes, ingredients, and other relevant details for easy comparison.

### Data Requirements

**Example Data**:
   - Include example data for burgers, locations, and all associated attributes (e.g., preparation methods, sauces, buns, meats, and ingredients).
   - Provide this data as fixtures or SQL files that can be loaded into the application.

### Optional/Additional Features

1. **Enhanced Burger Recommendations**:
   - Improve the recommendation algorithm to provide more accurate or personalized burger suggestions.

2. **Advanced Burger Comparison**:
   - Enhance the comparison feature to include additional metrics or visual aids (e.g., charts or graphs) for comparing burgers.
