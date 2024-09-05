# Artificial Intelligence: Malicious URL Detection with Machine Learning
## Objective:
This project aims to create a user-friendly web application that leverages a machine-learning model to detect phishing URLs. The application will allow users to input URLs, view the AI-generated probability of the URL being malicious, and provide feedback on the assessment's accuracy. This feedback loop will help improve the model's performance over time.


## How It Works
1. **Data Handling**
* Dataset: The project utilizes the Malicious URL Dataset, which includes various features of URLs (DATA SET URL : https://www.kaggle.com/datasets/sid321axn/malicious-urls-dataset).
* Preprocessing: The data is cleaned and prepared by handling missing values, outliers, and encoding features to make it suitable for machine learning models.
2. **Feature Engineering**
* Additional features are engineered to enhance the model's performance. This can include analyzing domain attributes and applying natural language processing techniques.
3. **Model Development**
* Different machine learning models are tested to identify the best approach for detecting malicious URLs.
* Cross-Validation: To ensure the model generalizes well, cross-validation techniques are used to avoid overfitting.
4. **User Interface**
* REST API: The application provides an API where users can:
* Submit URLs: Users input URLs to be analyzed.
* Receive Analysis: The API returns the probability of the URL being malicious.
* Provide Feedback: Users can confirm or correct the analysis, helping to improve the model's accuracy over time.
5. **Performance Metrics**
* The model's effectiveness is evaluated using metrics such as accuracy, precision, recall, and F1-score. The focus is on minimizing false negatives to reduce the risk of missing a malicious URL.
  
## Repository Contents
**static/**: Contains static files like CSS, JavaScript, and images.

**templates/**: Includes HTML templates for the web application.

**malicious_url_detection.ipynb**: Jupyter Notebook with code for model development and evaluation.

**try (1).py**: Python script implementing the model and performing testing.

## Video Demo
Watch the following video demo to see the application in action and understand how it works:



## Usage
1. **Run the Backend**: Start the REST API server to enable URL analysis.
2. **Submit URLs**: Use the API to submit URLs for analysis.
3. **View Results**: Check the returned probabilities and provide feedback.
4. **Feedback Integration**: Use the feedback to continuously refine the model.
  
## Future Enhancements
* **Web Application**: An optional user interface for easier interaction.
* **Bulk Analysis**: Allow batch processing of multiple URLs.
* **Reporting**: Generate detailed reports on analyzed URLs.


