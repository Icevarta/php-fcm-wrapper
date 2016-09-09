<?php
return [
	/*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */
	"operations" => [
		/**
         *    send() method
         *
         *    reference: https://firebase.google.com/docs/cloud-messaging/http-server-ref#downstream-http-messages-json
         */
		"send" => [
			"httpMethod" => "POST",
			"uri" => "send",
			"summary" => "Send notification(s) to one or multiple registered tokens",
			"responseModel" => "defaultJsonResponse",
			"parameters" => [
				"registration_ids" => [
					"type" => "array",
					"location" => "json",
					"description" => "Registration tokens to send the notification to",
					"required" => true,
				],
				"notification" => [
					"location" => "json",
					"required" => false,
					"type" => "object",
					"properties" => [
						"title" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates notification title.",
							"required" => false,
						],
						"body" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates notification body text.",
							"required" => false,
						],
						"icon" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates notification icon. Sets value to myicon for drawable resource myicon",
							"required" => false,
						],
						"sound" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates a sound to play when the device receives a notification. Supports default or the filename of a sound resource bundled in the app.",
							"required" => false,
						],
						"tag" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates whether each notification results in a new entry in the notification drawer on Android. If not set, each request creates a new notification. If set a notification with the same tag is replaced.",
							"required" => false,
						],
						"color" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates color of the icon, expressed in #rrggbb format",
							"required" => false,
						],
						"click_action" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates the action associated with a user click on the notification. When this is set, an activity with a matching intent filter is launched when user clicks the notification.",
							"required" => false,
						],
						"body_loc_key" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates the key to the body string for localization. Use the key in the app's string resources when populating this value.",
							"required" => false,
						],
						"body_loc_args" => [
							"type" => "array",
							"location" => "json",
							"description" => "Indicates the string value to replace format specifiers in the body string for localization.",
							"required" => false,
						],
						"title_loc_key" => [
							"type" => "string",
							"location" => "json",
							"description" => "Indicates the key to the title string for localization. Use the key in the app's string resources when populating this value.",
							"required" => false,
						],
						"title_loc_args" => [
							"type" => "array",
							"location" => "json",
							"description" => "Indicates the string value to replace format specifiers in the title string for localization.",
							"required" => false,
						],
						"badge" => [
							"type" => "integer",
							"location" => "json",
							"description" => "Indicates the badge on the client app home icon.",
							"required" => false,
							"default" => 1,
						],
					]
				],
				"priority" => [
					"type" => "string",
					"location" => "json",
					"description" => "Sets the priority of the message. Valid values are \"normal\" and \"high.\" On iOS, these correspond to APNs priorities 5 and 10.",
					"default" => "high",
				],
				"data" => [
					"type" => "array",
					"location" => "json",
					"description" => "The additional data to send in the notification",
				],
			]
		],
	],

	/*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */
	"models" => [
	],
];
